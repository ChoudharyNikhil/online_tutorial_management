<?php
ob_start();
session_start();
if($_SESSION["session"]==1)
{
 require_once("connect.php");
 $error =''; 
 if(isset($_POST['btn_add_sub']))
 {
  $sub_name= trim($_POST['add_sub']);
  if($sub_name==''||$sub_name==null )
  {
   $error = $error."please enter subject name";
   }
   else
   {
     $sql="select * from tbl_subj where sub_name='$sub_name'";
     $rs=mysql_query($sql);
     $no=mysql_num_rows($rs);
     if($no!=0)
     {
   		$error = $error." subject name already exist ";
     } 
     else
     {
    	$sql1="insert into tbl_subj values(null,'$sub_name')";
    	$rs1= mysql_query($sql1);
 		header("location:subject_view.php"); 
  	 }
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
     <?php require_once("menu_subject.php"); ?>
<div id="content">
 <div id="main_login">
 <div class="form_head">Add New Subject</div>
 <script>
arrRecords=new Array();
arrRecords[0]='add_sub';
</script>
 <form name="frm_add_sub" method="post" onsubmit="javascript:return blankValidate('frm_add_sub',arrRecords)" >
 <div class="form_content">
  <div class="form_main_line">
   <div class="form_main_line_left">Subject Name</div>
   <div class="form_main_line_right">
   <input class="text" id="add_sub" type="text" name="add_sub" onblur="return blank_alpha(this.id)"/>
   </div>
  </div>
  <div class="form_main_line" align="center">
   <input class="button" type="submit" value="Add" name="btn_add_sub" id="btn_add_sub"   />
    <p style="color:#FF0000;" id="pid"><?php echo $error; ?></p>
  </div>
 </div>
  </form>
</div>
    </div><!--main div close-->
	<div id="footer"></div>
   </div>
</div><!--body div close-->
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