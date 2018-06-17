<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title> کارنامه</title>
	<link rel="stylesheet" href="styles/style1.css">
	<link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">
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
				<a href="login.html" class="active">صفحه اصلی</a>
			</li>
			<li></li>
			<li>
				<div class="dropdown">
					<button class="dropbtn">ثبت نام دروس
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content" id="myDropdown">
						<a href="s.en.php">انتخاب واحد</a>
						<a href="s.hz.php">حذف واضافه</a>
						<a href="s.mo.php">مشاهده آخرین وضعیت جاری (ترم جاری)</a>
                       	 <a href="s.ma.php"> مدیرت مالی نیم سال های تحصیلی دانشجو</a>
                      	 <a href="s.er.php"> ارسال درخواست اعتراض به نمره</a>
                      	 <a href="s.kr.php"> مشاهده کارنامه ی دانشجو</a>
					</div>
				</div>
			</li>
            
			<li>
				<a href="s.arzeshyabi.php">ارزشیابی استاد</a>
			</li>
			
		</ul>
	</nav>
	<!--main-->
<div class="main">


		<!--content -->
  <section>
    <h2>مشاهده کارنامه ی دانشجو</h2>
    <center>
    <form name="form2" method="post" action="">
      <table width="200" border="1">
        <tr>
         <th scope="col">نام </th>
         <th scope="col">نام خانوادگی</th>
         <th scope="col">شماره دانشجویی</th>
       </tr>
       <tr>
         <th scope="row"><?php

  
	
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
   echo '<th scope="row">'. $row['fname'] .'</th>';

 echo '</tr>';
echo'</table>';
echo'</center>';



					   }
					   
					 
					  mysqli_close($conn);
					  ?></th>
         <td><?php

  
	
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
   echo '<th scope="row">'. $row['laname'] .'</th>';

 echo '</tr>';
echo'</table>';
echo'</center>';



					   }
					   
					 
					  mysqli_close($conn);
					  ?></td>
         <td><?php

  
	
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
   echo '<th scope="row">'. $row['code d'] .'</th>';

 echo '</tr>';
echo'</table>';
echo'</center>';



					   }
					   
					 
					  mysqli_close($conn);
					  ?></td>
       </tr>
   </table>
     <p>&nbsp;</p>
     <table width="200" border="1">
       <tr>
    <th scope="col">شماره</th>
    <th scope="col">نام درس</th>
    <th scope="col">استاد</th>
    <th scope="col">نمره</th>
    </tr>
  <tr>
    <th scope="row">1</th>
    <td>برنامه نویس</td>
    <td>برنامه نویسیان</td>
    <td><?php

  
	
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
     <p>&nbsp;</p>

    </form>
    </center>
  </section>
  <center>
  <form name="form1" method="post" action="eteraz.php">
  <table width="274" height="106" border="1">
  <tr>
    <th scope="col">وضعیت اعتراض ثبت شده</th>
    </tr>
  <tr>
    <th scope="row"><?php

  
	
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
					  ?></th>
    </tr>
</table>




  </form>
  </center>
  <p>&nbsp;</p>
</div>


<footer>
		<div class="copyright">
			<p>هرگونه کپی برداری پیگرد قانونی دارد		</p>
		</div>
		
	</footer>
</body>

</html>