
<?php
$host 	= "localhost";
$username ="root";
$password ="";
$db_name="nomarat";
// Create connection
$connect = new mysqli($host, $username, $password,$db_name);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$myusername = $_POST['txtUser'];
$mypassword = $_POST['txtPass'];
$sql = "SELECT * FROM user2 WHERE Username ='$myusername' and Password = '$mypassword'";
 $result=$connect->query($sql);


 if($result->num_rows>0)
    {
	
header("location:login2.php");	
}
else{
	$_SESSION['err_login']="*نام کاربری یا پسورد اشتباه است!";
        header('location:login1techer.php');
	
	}

?>