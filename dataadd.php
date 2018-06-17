
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
	 $sql = "SET NAMES 'utf8'";
    $query = mysqli_query($conn, $sql);
	

	if('add1'=="")
	{
		
		echo"چیزی وارد نکرده اید";
	}
	else
	if('add1'<1){
	
	$myadd1 =$_POST['add1'];
		$myadd2 =$_POST['add2'];
			$myadd3 =$_POST['add3'];
	
 $sql = "INSERT INTO `student` (`id`, `fname`, `laname`, `code d`, `nomre`) VALUES (null,'$myadd1', '$myadd2', '$myadd3','2')";
        $query = mysqli_query($conn, $sql);
       if($query) {
            echo "Inserting Into Table books: Error! " ;
        } else {
            echo "Inserting Into Table books: OK!";
        }
    
	}
        

//پایان اتصال
mysqli_close($conn);
?>