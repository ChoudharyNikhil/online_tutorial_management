<?php
session_start();
ob_start();
if($_SESSION["session"]==1)
{
	require_once("connect.php");
	$old_name=$_GET["name"];
	$sub_id=$_GET["id"];
	$error ='';
	if(isset($_POST['btn_edit_sub']))
	{
 		$sub_name= trim($_POST['edit_sub']);
  		if($sub_name==''||$sub_name==null )
 		{
   			$error = $error."please enter subject name";
 		}
		else
		{
  			$new_name=$sub_name;
  			$sql="update tbl_subj set sub_name='$new_name' where id=$sub_id";
  			$rs=mysql_query($sql);
 			header("location:subject_view_edit.php");
  			$error=$error."subject name updated";
 	     }
	 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="styleadd.css" />
<script language="javascript" src="valid.js"></script>
<title>dashboard</title>
</head>

<body>
<div id="body"> 
   <div id="mainheader">
   <?php require_once("header.php"); ?>
   </div>
 <div id="main">
     <?php require_once("menu.php"); ?>  
     <?php require_once("menu_subject.php"); ?><div id="content">
 <div id="main_login">
 <div class="form_head">Edit Subject</div>
<script>
arrRecords=new Array();
arrRecords[0]='edit_sub';
</script>

<form method="post"  name="frm_edit_sub" onsubmit="javascript:return blankValidate('frm_edit_sub',arrRecords)">
<div class="form_content">
<div class="form_main_line">
<div class="form_main_line_left">Subject Name</div>
<div class="form_main_line_right">
<input class="text" type="text" id="edit_sub" name="edit_sub" value="<?php echo $old_name;?>"onblur="return blank_alpha(this.id)" /></div>
</div>

<div class="form_main_line" align="center">
<input class="button" type="submit" value="Update" name="btn_edit_sub" />
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