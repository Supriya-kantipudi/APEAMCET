<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = "apeamcet";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error($conn));
}
echo "Database connected";
?>