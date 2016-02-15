<?php
session_start();
if($_SESSION["session"]==1)
{
require_once("connect.php");
$query="select * from tbl_user";
$rs=mysql_query($query);
$num=mysql_num_rows($rs);
$count=(int)($num/5);
if($num%5!=0)
{
$count++;
}
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
        <div id="main_login">

     <div class="form_head">View User</div>
<form method="post">
<center>
<select name="range" size="1" id="range" onChange="submit()">
  <option value="select range">select range</option>
  <?php
  $t1=1;
  for($i=1;$i<=$count;$i++)
  {
   $c=$t1+4;
   if($c<=$num)
   {
   $c=$c;
   }
   else
   {
   $c=$num;
   }
  ?>
  <option value="<?php echo $t1-1;?>"><?php echo $t1."-".$c;?></option>
  <?php
  $t1=$t1+5;
  }
    ?>
</select>
</center>
</form>
<?php
if(isset($_POST["range"]))
{
$index=$_POST["range"];
$sql1="select * from tbl_user limit $index,5";
$rs1=mysql_query($sql1);
 if($num>0)
 {
 ?>
 <table align="center" border="2px">
<tr>
 <?php
 $nofield=mysql_num_fields($rs1);
while($field=mysql_fetch_field($rs1))
{
?>
<td><?php
  if($field->name=="id")
   echo "sr no.";
   else
   echo $field->name;
  ?></td>
<?php }

?>
</tr>

<?php
 $sr=0;
 while($row=mysql_fetch_row($rs1))
{
?>
<tr>
<?php
for($i=0;$i<$nofield;$i++)
{
?>
<td><?php  if($i==0)
          {
		    $sr++;
			echo $sr;
            }
       else if(($i==4) &&($row[4]==0))
        {
?>
       <a href="enable.php?status=<?php echo "enable";?>&id=<?php echo $row[0];?>">enable</a>
<?php
        }
			 elseif(($i==4) &&($row[4]==1))
			 {
?>
			 <a href="enable.php?status=<?php echo "disable";?>&id=<?php echo $row[0];?>">disable</a>
<?php
             }
			 else
			 {
			 echo $row[$i];
			 }
 ?>    </td>
<?php
}//for no field
?>
</tr>
<?php
}//while row
?>
</table>
<?php
}//num>0
}//if isset range

?>
</div>
</div><div id="footer"></div>
</div>
</div>
   </div>
	
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