
<!doctype html>

<html>

<head>
	<meta charset="utf-8">
	<title>به سیستم آموزشی آرتا خوش آمدید</title>
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
				<a href="login2.html" class="active">صفحه اصلی</a>
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
  <form name="form1" method="post" action="dataadd.php">
    <table width="200" border="1">
      <tr>
      <th scope="col">نام</th>
    <th scope="col">نام خانوادگی</th>
    <th scope="col">شماره دانشجویی</th>
    </tr>
  <tr>
    <th scope="row"><label for="add1"></label>
      <input type="text" name="add1" id="add1"></th>
    <td><input type="text" name="add2" id="add2"></td>
    <td><input type="text" name="add3" id="add3"></td>
    </tr>
</table>
    	<p>
    	  <input type="submit" name="Submit" id="button" value="ثبت نمرره دانشجو">
   	  </p>
  </form>
  </form>
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
