<?php
ob_start();
session_start();
$_SESSION["session"]=0;
require_once('connect.php');   
if(isset($_POST['submit']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$sql="select * from tbl_admin where username='$user' and password='$pass'";	
	
	$rs=mysql_query($sql);
	
	$num=mysql_num_rows($rs);
	
	if($num>0)
	{
  	$_SESSION["user"]=$uname;
	$_SESSION["session"]=1;
	header('location:home.php');
	}
}
else 
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>Admin Panel | tutorial</title>
<link rel="stylesheet" type="text/css" href="css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w" id="hiringbrain" style="background:#6699CC;"><h1>ONLINE TUTORIAL POINT</h1></div>
			<div class="full_w" style="background:linear-gradient( #FFFFFF, #6699CC);">
			
			<div id="lock"><img src="img/lock.png"></div>
				
			<div id="loginpanel">	
			<h1>Administrator Login </h1>
				<div class="sep" style="background:#ba650b;"></div>
				<form action="" method="post">
					 <label for="user">Username</label>
					<input type="text" class="text" id="username" name="username"/>
					
					<label for="pass">Password:</label>
					<input id="password" name="password" type="password" class="text" />
					</p>
					<div class="sep" style="background:#ba650b;"></div>
					<input type="submit" class="ok" id="submit" name="submit" value="Login"/> 					
					<p id="msg" style="font-size:14px;color:#FF0000">
					<?php
					if(isset($flag) && $flag==1)
					{
					echo "*Access Denied!!!";					}
					?>
					</p>
					
				</form>
				
				</div>
			</div>
			
		</div>
	</div>
</div>

</body>
</html>
<?php
}
ob_flush();
?>