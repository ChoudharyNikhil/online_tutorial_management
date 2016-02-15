<?php
session_start();
if($_SESSION["session"]==1)
{
	require_once("connect.php");
 	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="styleadd.css" />
<title>dashboard</title>
</head>
<body>
<div id="body"> 
<div id="mainheader">
   <?php require_once("header.php"); ?>
  </div>
   <div id="main">
     <?php require_once("menu.php"); ?>  
     <?php require_once("menu_setting.php"); ?>
      <div id="content">
      
      <div id="feedback">
       
     </div>
      
      
      
      
     </div>
	<div id="footer"></div>
   </div>
</div>
</body>
</html>
<?php
}
else
{
  header("location:index.php");
}
ob_flush();
?>