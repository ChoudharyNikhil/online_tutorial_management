<?php
session_start();
ob_start();
if($_SESSION["session"]==1)
{
  require_once("connect.php");
  $error ='';
  if(isset($_POST['btn_add_sub']))
  {
    $sub_new_name = trim ($_POST['sub_name']);
	   $sub_id=$_POST["select"];
       $sql1="select * from tbl_subj where id=$sub_id";
       $rs1=mysql_query($sql1);
        while($row1=mysql_fetch_row($rs1))
         {
          $subj_name=$row1[1];
           }
         $subtopic_name=$_POST["sub_name"];
          $sql2="select * from tbl_subtopic where subj_id=$sub_id and topic_name='$subtopic_name'";
          $rs2=mysql_query($sql2);
          $num2=mysql_num_rows($rs2);
       if($num2!=0)
           {
           $error = $error."same  name already exist";
            }
       else
              { 
              $sql="insert into tbl_subtopic(subj_id,topic_name) values('$sub_id','$subtopic_name')";
              $rs=mysql_query($sql);
              header("location:sub_topic_view.php");
                }
    }//button close
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
<div class="form_head">Add Topics</div>
<script>
arrRecords=new Array();
//arrRecords[0]='img_path';
arrRecords[2]='sub_name';
</script>
<form name="frm_add_sub" method="post" enctype="multipart/form-data" onsubmit="javascript:return blankValidate('frm_add_sub',arrRecords)" >
<div class="form_content">

<div class="form_main_line">
<div class="form_main_line_left">Subjects</div>
<div class="form_main_line_right">
  <select class="text" name="select" id="select">
  <option value="--select Subject--">--select subject--</option>
  <?php 
	$sqlsub="select * from tbl_subj";
	$rssub=mysql_query($sqlsub);
	var_dump($rssub);
	$num=mysql_num_rows($rssub);
  while($row=mysql_fetch_row($rssub))
   {
	if($_POST["select"]==$row[1])
	{
	?>
	<option  selected="selected" value="<?php  echo $row[0];?>">
	<?php  echo $row[1];?></option>
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
  </select>
</div>
</div>

<div class="form_main_line">
<div class="form_main_line">
<div class="form_main_line_left">Sub topic Name</div>
<div class="form_main_line_right"><input class="text" type="text" name="sub_name" id="sub_name" onblur="return blank_alpha(this.id)"  /></div>
</div>

<div class="form_main_line" align="center">
<input class="button" type="submit" value="Add" name="btn_add_sub" />
<p style="color:#FF0000;" id="pid"><?php echo $error; ?></p>
</div>
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