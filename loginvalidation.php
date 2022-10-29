<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginvalidation</title>
</head>
<body>
    <?php
session_start(); 

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'apeamcet');
$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name' && password = '$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION["name"] = $name;
    header('location:report21.php');
}else{
    // header('location:loginpage.html');
    echo '<script>alert("Invalid credentials")</script>';
}
?>
</body>
</html>