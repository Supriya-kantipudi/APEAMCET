<?php
include_once 'dbconfig.php';
$branch = $_POST["group"];
$year = $_POST["year"];

$filename = "student_data_".date('Y-m-d').".xls";
$fields = array('SNO','ApplicantName','Ranking','Caste','Branch','College');
$excelData = implode("\t",array_values($fields))."\n";
if($branch == 'ALL'){
	$sql = " SELECT Applicantname,Ranking,Branch,College,Caste from students where  College ='VISW' order by Ranking";
}
else{
	$sql =  " SELECT Applicantname,Ranking,Branch,College,Caste from students where  College ='VISW' and Branch ='$branch'  order by Ranking";
}
   $result = mysqli_query( $conn,$sql);
if($result->num_rows >0){
    $sno = 1;
    while($row = $result->fetch_assoc()){
        $lineData = array($sno,$row['Applicantname'],$row['Ranking'],$row['Caste'],$row['Branch'],$row['College']);
        $excelData.=implode("\t",array_values($lineData))."\n";
        $sno = $sno + 1;

    }
}else{
    $excelData = 'No records found .....'."\n";
}
header("content-type:application/vnd.ms-excel");
header("content-Disposition:attachment;filename=\"$filename\"");
echo $excelData;
exit;
