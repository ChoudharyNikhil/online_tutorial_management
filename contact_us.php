<?php
ob_start();
session_start();
require_once('connect.php');

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['txt_email'];
$message=$_POST['msg1'];
$nss="insert into tbl_feedback(id,name,email,message)values(null,'$name','$email','$message')";
mysql_query($nss);

}

?>

 
<?php 

require_once("header.php"); ?>
<script type="text/javascript" src="validation.js">
</script>

<div class="clear"></div>
<!--main content -->


<div id="div_content">

<div id="div_content_left">


<!-- new home menu -->
<div class="home_menu">
<ul>
   <li><a href="index.php">Home</a></li>
   <li><a href="#">Contact us</a></li>
</ul>
</div>
<!-- new home menu close -->
<!-- contact us content-->
<div id="div_aboutus">
<h1><big>contact  </big></h1>
<font id="msg" color="red"></font>
<form method="post" onsubmit="return validate()">
<br /><br />
<input class="input" type="text" name="name" id="name" placeholder="Name" size="90" />
<br /><br />
<input type="text" placeholder="Email Address" name="txt_email" id="txt_email"size="90" class="input" />
<br /><br />
<input type="text" name="sub" placeholder="Subject" id="sub" size="90" class="input"/>
<br /><br />
<textarea  name="msg1" placeholder="Message" rows="10" cols="75" id="msg1" style="border-style:none; padding:10px; box-shadow:0px 0px 5px 0px #E0E0E0 inset; border-radius:10px; background-color:#F7F7F7" ></textarea>
<br /><br />

<div class="flow_right">
<input class="input" type="submit" value="SUBMIT" id="submit" name="submit" />
<input class="input" type="reset" value="RESET" id="reset" name="reset" />
</div>
</font>
</form>
</div>
<!-- contact us content close-->
</div>
<!--div_content_left close -->
<div id="div_content_right">
</div>
<!--div_content_right close -->
</div>

<div class="clear"></div>
<?php require_once("footer.php"); ?>
</body>
</html>
<?php
ob_flush();
?>