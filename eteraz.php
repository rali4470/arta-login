<?php

  
	
$host 	= "localhost";
$username ="root";
$password ="";
$db_name="nomarat";

// Create connection
$conn = mysqli_connect($host, $username, $password,$db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . $mysqli_connect_error());
	}
	
	echo"----وصل شد";
	 $sql = "SET  NAMES 'utf8'";
    $query = mysqli_query($conn, $sql);
	


	
	$myete =$_POST['ete'];
	
	
 $sql =  $sql5 = "UPDATE `student` SET `eteraz` = '$myete'  WHERE `id` = '5'";
        $query = mysqli_query($conn, $sql);
       if($query) {
            header("location:s.er.php" );
        } else {
            echo "Inserting Into Table books: OK!";
        }
    
        

//پایان اتصال
mysqli_close($conn);
?>