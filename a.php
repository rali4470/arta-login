
<!doctype html>

<html>

<head>
	<meta charset="utf-8">
	<title>به سیستم آموزشی آرتا خوش آمدید</title>
	<link rel="stylesheet" href="styles/style1.css">
	<link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">
	<style type="text/css">
	.main center form table {
}
    </style>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/myjquery.js"></script>
</head>

<body>
<header>

		<h1 >سیستم آموزشی </h1>
  <h1 align="center"> آرتا</h1>

	</header>
	<nav>
		<img src="images/menu-icon.png" id="menu_icon">
		<ul>
			<li>
				<a href="login2.php" class="active">صفحه اصلی</a>
			</li>
			<li></li>
			<li>
				<div class="dropdown">
					<button class="dropbtn"> دروس
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content" id="myDropdown">
					<a href="a.php">برنامه نویس 1</a>
                        <a href="b.php">برنامه نویس 2</a>
                        <a href="c.php">مبتنی بر وب </a>
                        <a href="d.php">کارگاه مبتنی بر وب</a>
                        <a href="e.php">پایگاه داده ها</a>
                        <a href="f.php">آز پایگاه داده ها</a>
                        <a href="g.php">نرم افزار های گرافیکی</a>
                        <a href="h.php">زبان ماشین اسمبلی</a>
                        
                        
						
					</div>
				</div>
			</li>
            
			<li>
				<a href="t.mali.php"> مالی</a>
			</li>
			
		</ul>
	</nav>
	<!--main-->
<div class="main">


		<!--content -->
<section>
  <h2>ثبت نمره ی درس برنامه نویس (1)</h2>
 
  
  <p>&nbsp;</p>
         
</section>


<center>
  <form name="form1" method="post" action="data.php">
    <table width="527" border="1">
      <tr>
      <th width="39" height="61" scope="col">شماره</th>
    <th width="40" scope="col">نام</th>
    <th width="55" scope="col">نام خانوادگی</th>
    <th width="59" scope="col">شماره دانشجویی</th>
    <th width="144" scope="col">نمره      </th>
    <th width="120" scope="col">وضعیت اعتراض به نمره</th>
    <th width="124" scope="col">نمره ی نهایی ثبت شده</th>
      </tr>
  <tr>
    <th height="26" scope="row">1</th>
    <th scope="row">کاوه</th>
    <td>کیانی</td>
    <td>95689</td>
    <td ><input name="nom5" type="number" id="nom5"></td>
    <td ><?php

  
	
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

	
	 $sql = "SET NAMES 'utf8'";
    $query = mysqli_query($conn, $sql);
	
	
	 $sql5 = "SELECT * FROM student   WHERE `id` = '5'";
	 				   foreach ($conn->query($sql5) as $row) {
						   	 
								echo'<center>';
								echo'<table width="200" border="1">';
 echo '<tr>';
 echo '</tr>';
 echo '<tr>';
   echo '<th scope="row">'. $row['eteraz'] .'</th>';

 echo '</tr>';
echo'</table>';
echo'</center>';



					   }
					   
					 
					  mysqli_close($conn);
					  ?></td>
    <td ><?php

  
	
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

	
	 $sql = "SET NAMES 'utf8'";
    $query = mysqli_query($conn, $sql);
	
	
	 $sql5 = "SELECT * FROM student   WHERE `id` = '5'";
	 				   foreach ($conn->query($sql5) as $row) {
						   	 
								echo'<center>';
								echo'<table width="200" border="1">';
 echo '<tr>';
 echo '</tr>';
 echo '<tr>';
   echo '<th scope="row">'. $row['nomre'] .'</th>';

 echo '</tr>';
echo'</table>';
echo'</center>';



					   }
					   
					 
					  mysqli_close($conn);
					  ?></td>
  </tr>
</table>
  	<p>
    	  <input type="submit"  alt="این گزینه  برای  شما فعال نیست "name="Submit" id="button" value="ثبت نمره دانشجو">
   	  </p>
      
  </form>
</center>  
  
</div>




<footer>
		<div class="copyright">
			<p>هرگونه کپی برداری پیگرد قانونی دارد		</p>
		</div>
		
</footer>
</body>

</html>
