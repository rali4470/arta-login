
<?php

  
	
$host 	= "localhost";
$username ="root";
$password ="";
$db_name="nomre";

// Create connection
$conn = mysqli_connect($host, $username, $password,$db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . $mysqli_connect_error());
	}
	
	echo"وصل شد";
	$mynom =$_POST['das'];
	
$mydas =$_POST['nom'];
	
 $sql = "INSERT INTO num(nom, das) VALUES('$mydas', '$mynom')";
        $query = mysqli_query($conn, $sql);
        
         
      
        
           
        if(!$query) {
            echo "Inserting Into Table num: Error! " . mysqli_error($conn);
        } else {
            echo "Inserting Into Table num: OK!";
        
}
//پایان اتصال
mysqli_close($conn);
?>