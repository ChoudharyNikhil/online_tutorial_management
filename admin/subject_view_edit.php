<?php
session_start();
if($_SESSION["session"]==1)
{
	require_once("connect.php");
	//include('file:///G|/header_menu.php');
 	$query="select * from tbl_subj";
	$rs=mysql_query($query);
	//var_dump($rs);
	$num=mysql_num_rows($rs);
	//var_dump($num);
		if($num>0)
		{
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
     <?php require_once("menu_subject.php"); ?>
     <div id="content">
 <div id="main_login">
 <div id="main_login" style="height:400px;">
<div class="form_head">Edit  Subject</div>
<form method="post"  action="home.php">
<div class="form_content" style="height:300px">
<table style=" margin:auto" width="335" border="1" >
  <tr>
    <td width="38" align="center"><strong>Sr no.</strong></td>
    <td width="63" align="center"><strong>Name</strong></td>
     <td width="57" align="center">Edit</td>
  </tr>
  <?php 
  $i=1;
  while($row=mysql_fetch_row($rs))
  {
  ?>
  <tr>
    <td align="center"><?php echo $i++; ?></td>
    <td align="center"><?php echo $row[1]; ?></td>
    <td><a href="subject_edit.php?id=<?php echo $row[0];?>&amp;name=<?php echo $row[1];?>">Edit</a>
	</td>
  </tr>
   <?php  
   } 
   ?>
</table>
<?php
}
else
{?>
<div id="main">
    <div id="main_big">
    <div id="main_login">
    <?php echo "<strong>no record found!!!</strong>"; ?>
    </div>
    </div>
    </div>
<?php
}
?>

</table>
</div>
</form>
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