<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>درخواست اعتراض</title>
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
    <h2>ارسال درخواست اعتراض به نمره</h2>
          <p>&nbsp;</p>
          <center>
  <form name="form1" method="post" action="eteraz.php">
  <table width="333" height="106" border="1">
  <tr>
    <th width="172" scope="col">اعتراض</th>
    <th width="107" scope="col">وضعیت اعتراض ثبت شده</th>
    </tr>
  <tr>
    <th scope="row"><p>
      <label for="no"></label>
    </p>
      <p>
        <select name="ete" id="no">
          <option>من اعترض به نمره دارم</option>
          <option>هیچ اعتراضی ندارم</option>
          <option>هیچ نظری ندارم</option>
    </select>
        <input type="submit" name="button" id="button" value="تایید">
      </p>
      <p>
  <label for="textarea"></label>
      </p></th>
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
         
  </section></div>


<footer>
		<div class="copyright">
			<p>هرگونه کپی برداری پیگرد قانونی دارد		</p>
		</div>
		
	</footer>
</body>

</html>