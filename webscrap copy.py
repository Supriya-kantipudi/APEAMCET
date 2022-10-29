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
