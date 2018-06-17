
<!doctype html>

<html>

<head>
	<meta charset="utf-8">
	<title>انتخاب واحد</title>
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
					<button class="dropbtn">دروس
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content" id="myDropdown">
						<a href="t.sab.php">ثبت نمره</a>
						
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
    <h2>ثبت نمره دانشجو</h2>
    <p></p>
    <form name="form1" method="post" action="sabt.php">
      <table width="274" border="1">
        <tr>
          <th scope="col">درس</th>
          <th scope="col">نمره</th>
        </tr>
        <tr>
          <th scope="row"><label for="das"></label>
          <input type="text" name="das" id="das"></th>
          <td><label for="nom"></label>
          <input type="text" name="nom" id="nom"></td>
        </tr>
      </table>
      <input type="submit" name="button" id="button" value="Submit">
    </form>
    <p>&nbsp;</p>
  </section>
</div>


<footer>
		<div class="copyright">
			<p>هرگونه کپی برداری پیگرد قانونی دارد		</p>
		</div>
		
	</footer>
</body>

</html>
