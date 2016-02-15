<?php
require_once("connect.php");
$query="select * from tbl_feedback";
$rs=mysql_query($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>dashboard</title>
</head>

<body>
<div id="body"> 
 <div id="mainheader">
   <?php require_once("header.php"); ?>
  </div>
   <div id="main">
     <?php require_once("menu.php"); ?>  
     <?php require_once("menu_home.php"); ?>
     
     <div id="contentf">
     <div id="feedback">
       <h1><font color="#3399CC">FEEDBACK</font></h1>
     <table width="796" border="0" cellspacing="0" cellpadding="4">
  <?php
  //$count=0;
  while($row=mysql_fetch_row($rs))
  {
	//  $count++;
  ?>
  <tr>
  
    <td width="108"><?php echo "<font color='blue'>".$row[1]."</font>";?></td>
    <td width="672"><?php echo "<font color='blue'>(".$row[2].")</font>";?></td>
  </tr>
  <tr> 
  <td>&nbsp;</td>
    <td><?php echo $row[3];?></td>
  </tr>
  
  <?php
  }
  ?>

</table>
     </div>
     </div> 
     <div id="footer"></div>
   </div>
  
</div>
</body>
</html>
