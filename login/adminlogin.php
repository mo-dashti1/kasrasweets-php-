<?php 
// لازمه که حتما این خط رو بالای صفحه بنویسی یا اگه بالای صفحه نیست، قبلش نباید هیج کارکتری رو صفحه چاپ بشه. حتی یک اسپیش
session_start();
$user=$_POST['username'];
$password=$_POST['password'];

if(!isset($_SESSION['username']))
{
	// if user has not loged in yet
	 mysql_connect("localhost","root","");
	 mysql_select_db("kasraproject");
 
	 // it's better to use hashed password instead of simple one
	 
	 $sq=mysql_query("select * from adminlogin where username='$user' and pass='$password'");
	if($row=mysql_fetch_assoc($sq)){
		
		// you can add any index to $SESSION variable.  
		$_SESSION['username'] = $row['username'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['level'] = $row['level'];
	}
	else{
			header("location: loginadmin.html");
		}
}
else
{
	// user's loged in already. rediret uesr to you admin page.
}


// to log out, you have to unset session indexes
// unset($_SESSION['username']);
?>	

