<!doctype html>
<html>
<head>
	<title>
	<meta charset="UTF-8" />
	<title>KasraSweets</title>
	<link rel="stylesheet" type="text/css" href="1styles.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	</title>
</head>
<body>
<div class="container">
	<section class="adminlogin">
		<div class="chef"></div>
		<div class="br">
			<form action="adminlogin.php" method="post">
				<input name="username" type="text" placeholder="username" /> <br />
				<input name="password" type="password"  placeholder="password" /> <br />
				<button type="submit">login</button>
			</form>	
		</div>
	</section>
</div>
<?php 
$user=$_POST['username'];
$password=$_POST['password'];
if($username==KasraSweet && $password==246810){
 mysql_connect("localhost","root","");
 mysql_select_db("kasraproject");
 mysql_query("select username , pass from adminlogin");
	 if (username==$user && pass==$password) {
		echo "har har har !!!";
	 }
}
?>	
</body>
</html>
