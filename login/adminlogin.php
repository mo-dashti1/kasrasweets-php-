
<?php 
$user=$_POST['username'];
$password=$_POST['password'];
 mysql_connect("localhost","root","");
 mysql_select_db("kasraproject");
 $sq=mysql_query("select * from adminlogin where username='$user' and pass='$password'");
	if($row=mysql_fetch_assoc($sq)){
		?>
		
		<? php
	}
	else{
			header("location: loginadmin.html");
		}
?>	

