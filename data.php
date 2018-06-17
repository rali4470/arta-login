
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
	

	
	
	$mynom1 =$_POST['nom1'];
	$mynom2 =$_POST['nom2'];
	$mynom3 =$_POST['nom3'];
	$mynom4 =$_POST['nom4'];
	$mynom5 =$_POST['nom5'];
	



	
 $sql1 = "UPDATE `student` SET `nomre` = '$mynom1'  WHERE `id` = '1'";
  $sql2 = "UPDATE `student` SET `nomre` = '$mynom2'  WHERE `id` = '2'";
   $sql3 = "UPDATE `student` SET `nomre` = '$mynom3'  WHERE `id` = '3'";
    $sql4 = "UPDATE `student` SET `nomre` = '$mynom4'  WHERE `id` = '4'";
	 $sql5 = "UPDATE `student` SET `nomre` = '$mynom5'  WHERE `id` = '5'";
	 

        $query = mysqli_query($conn, $sql1);
		  $query = mysqli_query($conn, $sql2);
		    $query = mysqli_query($conn, $sql3);
			  $query = mysqli_query($conn, $sql4);
			    $query = mysqli_query($conn, $sql5);
        
         

      
        
           
        if(!$query) {
            echo "Inserting Into Table num: Error! " . mysqli_error($conn);
        } else {
            header("location:a.php");
		}
		
        

//پایان اتصال
mysqli_close($conn);
?>