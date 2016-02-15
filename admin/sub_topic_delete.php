<?php 
session_start();
ob_start();
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
     <?php require_once("menu_subtopic.php"); ?>
<div id="content">
 <div id="main_login">
<div class="form_head">Delete Topic</div>
<div class="form_content" style="height:300px;">
<div class="form_main_line">
<div class="form_main_line_left">Select Subject</div>
<div class="form_main_line_right">
<form method="post">
<select class="text" name="select" id="select" onchange="submit()">
  <option value="--select category--">--select Subject--</option>
  <?php 
	$sqlcat="select * from tbl_subj";
	$rscat=mysql_query($sqlcat);
	//var_dump($rscat);
    while($row=mysql_fetch_row($rscat))
    {
	if($_POST["select"]==$row[0])
	{
	?>
	<option  selected="selected" value="<?php  echo $row[0];?>"><?php  echo $row[1];?></option>
	<?php
	}
	else
	{
	?>
	<option  value="<?php  echo $row[0];?>"><?php  echo $row[1];?></option>
	<?php
	 }
   }
	?>
  </select></div>
</div>
<?php
 if(isset($_POST["select"]))
{ 
 $subj_id=$_POST["select"];
 $sql="select * from tbl_subtopic where subj_id=$subj_id limit 0,5";
 $sql1="select * from tbl_subj where id=$subj_id";
 $rs=mysql_query($sql);
 $rs1=mysql_query($sql1);
 $num=mysql_num_rows($rs);
 if($num>0)
 {
 ?>
<table align="center" border="2px">
<tr>
<td>Sr.No.</td>
<td>Topic_name</td>
<td>DELETE</td>
</tr>
<?php
 // var_dump($rs1);
  while($row1=mysql_fetch_row($rs1))
  {
   $cat_name=$row1[1];
      }
 // var_dump($cat_name);
 $i=1;
 while($row=mysql_fetch_row($rs))
  {
  ?>
  <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><a href="delete_topic.php?id=<?php echo $row[0];?>">Delete</a></td>
  </tr>
	<?php
	}
	?>
	</table>
	<!--<input type="button" onclick="return next($index,$num)" value="NEXT" name="btn_next" id="btn_next"/>-->
	 <?php
 }
 else
 {
 echo"<p>&nbsp;&nbsp;&nbsp;&nbsp;no record found</p>";
 }
 }
  ?>
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