<?php
session_start();
if($_SESSION["session"]==1)
{
  require_once('connect.php');	
  $error ='';	
	if(isset($_POST['btn_cng_pass']))
      {
       $old_pass = trim($_POST['text_old_pass']);
       $new_pass = trim($_POST['text_new_pass']);
       $re_pass = trim($_POST['text_confirm_pass']);
 
       if(strlen($old_pass)==0 || strlen($new_pass)==0 || strlen(          $re_pass)==0)
          {
           $error = $error."please enter values<br>";
          }
         else if ($new_pass!=$re_pass)
          {
            $error = $error."please enter same password<br>";
          }
 //fetch from database
 $sql="select * from tbl_admin where password='$old_pass'";  
  $rs=mysql_query($sql);
  $num=mysql_num_rows($rs);
   if($num==1)
   {
   $sql1="update tbl_admin set password='$new_pass' where password='$old_pass'";
   $rs1=mysql_query($sql1);
   header("location:index.php");
   }
   else
   {
   $error = $error."please enter right password <br>";
   }
}

?>
	
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

     <div class="form_head">Change Password</div>
     
     <form method="post"  >

<div class="form_content">
<div class="form_main_line">
<div class="form_main_line_left">Old Password</div>
<div class="form_main_line_right"><input class="text" type="Password" name="text_old_pass" id="text_old_pass" /></div>
</div>
<div class="form_main_line">
<div class="form_main_line_left">New Password</div>
<div class="form_main_line_right"><input class="text" type="password" name="text_new_pass" id="text_new_pass" /></div>
</div>
<div class="form_main_line">
<div class="form_main_line_left">Confirm Password</div>
<div class="form_main_line_right"> <input class="text" type="password" name="text_confirm_pass" id="text_confirm_pass" /></div>
</div>
<div class="form_main_line" align="center">
<input class="button" type="submit" value="Update" name="btn_cng_pass" />
<p style="color:#FF0000;" id="pid"><?php echo $error; ?></p>
</div>
</div>

</form>
     
     
     
     </div>
     <div id="footer"></div>
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