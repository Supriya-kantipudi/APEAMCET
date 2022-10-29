import mysql.connector
import requests
from bs4 import BeautifulSoup
import openpyxl
import csv
from requests.adapters import HTTPAdapter
from openpyxl import load_workbook


session = requests.Session()
dbconn = mysql.connector.connect(
    host = "localhost",
    port = 3306,
    user = "root",
    password = "",
    database = "apeamcet",
    
)
cursor = dbconn.cursor()
# print(dbconn)

# mycursor.execute("SHOW DATABASES;")
# for i in mycursor:
#      print(i)
# mycursor.execute("DESCRIBE students;")
# for i in mycursor:
#      print(i)
# mycursor.execute("drop table Students;")

cursor.execute("create table Students (sno varchar(10) ,Hallticket varchar(100) not null primary key,Ranking varchar(10),\
            Applicantname varchar(100),Gender varchar(100),Caste varchar(100),Region varchar(100),\
            Category varchar(100),phase varchar(10),College varchar(100),Branch varchar(100),admitted_year varchar(10));")
# mycursor.execute("")
cursor.execute("SELECT DISTINCT(Institute_Code) FROM College_details");
rows = cursor.fetchall()
colleges = []
for i in rows:
    colleges.append(i[0])
print(colleges)
branch_list =['AI','AID','AIM','CAD','CAI','CBN','CCC','CIA','CIC','CIV','CS','CN','CSC','CSD','CSE','INF','CSM','CSO','ECE','MEC','EEE']

for col_name in colleges:
    for branch_name in branch_list:
        print(branch_name)
        url = "https://eapcet-apsche.aptonline.in/EAPCET/collegeWiseAllotedReport.xls?mode=getData&programmeId="+col_name+"&collegeId="+branch_name
        page = session.get(url,verify = False)
        soup = BeautifulSoup(page.content,'html.parser')
        
        students = soup.find('tbody').find_all('tr')
        print(col_name,branch_name)
        for student in students:

            row_data = student.find_all('td')
            row = [i.text for i in row_data]
            row.append(col_name)
            row.append(branch_name)
            row.append('2021')
            print(row)
            sql_stmt = "INSERT INTO students(sno,hallticket,Ranking,applicantname,gender,caste,region,category,phase,college,branch,admitted_year) VALUES(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s);"
            added_values = tuple(row)
            cursor.execute(sql_stmt,added_values)
            dbconn.commit()
            print(branch_name)
