<?php 
session_start();
ob_start();
//if($_SESSION["session"]==1)
{

require_once("connect.php"); 
?>
<title>View_img</title>
<div id="main">
<div id="main_big">
<div id="main_login" style="height:400px;">
<div class="form_head">View Image</div>
<div class="form_content" style="height:300px;">
<div class="form_main_line">
<div class="form_main_line_left">Select Category</div>
<div class="form_main_line_right">
<form method="post">
<select class="text" name="select" id="select" onchange="submit()">
  <option value="--select category--">--select category--</option>
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
 //$sql="select * from tbl_image where cat_id=$cat_id limit 0,5";
 $sql="select * from tbl_subtopic where subj_id=$subj_id ";
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
<td>EDIT</td>
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
	<td><?php echo $row[4];?>kb</td>
    <td><a href="edit_img.php?id=<?php echo $row[0];?>&cat_id=<?php echo $row[1];?>&img_path=<?php echo $row[3];?>&img_name=<?php echo $row[2];?>">Edit</a></td>
    <td><a href="delete_img.php?id=<?php echo $row[0];?>&cat_id=<?php echo $row[1];?>&img_name=<?php echo $row[2];?>&img_path=<?php echo $row[3];?>&img_ext=<?php echo $row[5];?>">Delete</a></td>
	<?php 
	//$pathh=($cat_name."\\".$row[2].$row[5]);
	//echo $pathh;
	?>
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
</div>
</div>
<?php
/* function next($index,$num)
{
 $index+=5;
 if($num>$index)
 {
   //$index=$num-$index;
   return true;
 }
 return false;
} */
include('footer.php');
}//session

ob_flush();
?>
   