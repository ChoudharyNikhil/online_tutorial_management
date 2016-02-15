
<?php
ob_start();
require_once('connect.php');
if(isset($_POST['submit']))
{
$fname=$_POST['txt_first'];
$lname=$_POST['txt_last'];
$pass=$_POST['txt_pass'];
$email=$_POST['txt_email'];
$gender=$_POST['rbtn'];
$datee=$_POST['cmb_day'];
//echo $datee;
$month=$_POST['cmb_month'];
//echo $month;
$year=$_POST['cmb_year'];
//echo $year;
$dob="$month"." ".$datee." ".$year;
//echo $dob;
$y=date('Y',strtotime($dob));
$m=date('m',strtotime($dob));
$d=date('d',strtotime($dob));
//echo $dob;
$inss="Insert into tbl_user(first_name,last_name,pass,status,email,gender,dob) values('$fname','$lname','$pass',0,'$email','$gender','$y/$m/$d')";
//print_r($inss);
//var_dump($inss);
mysql_query($inss);
//var_dump($rs);
}
?>

<?php require_once("header.php") ?>
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
   <li><a href="#">About us</a></li>
</ul>
</div>
<!-- new home menu close -->
<!-- about us content-->
<div id="div_aboutus">

<br /><br />
<form method="post" onSubmit="return valid()">

  <div id="name">
     <div id="first">
     
	    <div id="first_txt" align="right"><input type="text" name="txt_Box_Name" placeholder="Enter Name" class="input_Signup" id="txt_Box_Name" onblur="return Required_Field_Validator('txt_Box_Name','lbl_error_msg_name')"  />
		</div>
	<div id="first_place" align="center"><font id="msg_first" color="#FF0000"></font></div>	
	 </div>
	 <div id="last">
	    <div id="last_txt" align="left"><input type="text" name="txt_Box_Last" placeholder="Enter Name" class="input_Signup" id="txt_Box_Last" onblur="return Required_Field_Validator('txt_Box_Last','lbl_error_msg_name')"  />
</div>
		<div id="last_place" align="center"><font color="#FF0000" id="msg_last"></font></div>
	 </div>
  </div><br />
  
  <div id="email" align="center">
      <div id="email_txt"><input type="text" name="txt_email" id="txt_email" placeholder="Enter your email" style="width:500px; height:40px;border-radius:5px;"></div>
		<div id="email_place"><font color="#FF0000" id="msg_email"></font></div>
  </div><br />
  <div id="remail" align="center">
     <div id="remail_txt"><input type="text" name="txt_remail" id="txt_remail" placeholder="Re-enter your email" style="width:500px; height:40px;border-radius:5px;"></div>
		<div id="remail_place"><font color="#FF0000" id="msg_remail"></font></div>
  </div><br />
  <div id="password" align="center">
     <div id="pass_txt"><input type="password" name="txt_pass" id="txt_pass1" placeholder="Enter your Password" style="width:500px; height:40px; border-radius:5px;"></div>
		<div id="pass_place"><font color="#FF0000" id="msg_pass"></font></div>
  </div><br />
  <div id="birth" >
     <div id="birthday" align="center"><font size="+3">Birthday</font></div>
	 <div id="month"><select name="cmb_month" id="cmb_month" style="width:115px;border-radius:5px;">
	                 <option value="1">Month</option>
					 <option value="jan">January</option>
					 <option value="feb">February</option>
					 <option value="mar">March</option>
					 <option value="apr">April</option>
					 <option value="may">May</option>
					 <option value="jun">June</option>
					 <option value="july">July</option>
					 <option value="aug">August</option>
					 <option value="sept">September</option>
					 <option value="oct">October</option>
					 <option value="nov">November</option>
					 <option value="dec">December</option>
					  <font color="#FF0000" id="msg_month"></font></select>
					
	 </div>
	 <div id="day"><select name="cmb_day" id="cmb_day" style="width:115px;border-radius:5px;">
	                 <option value="Day">Day</option>
					 <?php
					 for($i=01; $i<=31; $i++)
					 {
					     if($_POST['cmb_year']==$i)
						 {
					 ?>
					 <option selected="selected" value="<?php echo $i;?>">
					 <?php echo $i;?></option>
					 <?php }
					 else
					 {
					 ?>
					 <option value="<?php echo $i;?>">
					 <?php echo $i;?></option>
					 <?php }}?><font color="#FF0000" id="msg_day"></font></select>
					 </div>
	 <div id="year"><select name="cmb_year" id="cmb_year" style="width:115px;border-radius:5px;">
	                 <option value="1">Year</option>
					 <?php
					 for($i=1880; $i<=2014; $i++)
					 {
					     if($_POST['cmb_year']==$i)
						 {
					 ?>
					 <option selected="selected" value="<?php echo $i;?>">
					 <?php echo $i;?></option>
					 <?php }
					 else
					 {
					 ?>
					 <option value="<?php echo $i;?>">
					 <?php echo $i;?></option>
					 <?php }}?>
					 <font color="#FF0000" id="msg_year"></font></select>
					 </div>
  </div><br />
  <div id="gender">
    <div id="g_name" align="center"><font size="+3" color="black">Gender</font></div>
	<div id="female"><input type="radio" name="rbtn" id="rbtn_female" style="width:80px; height:20px;" value="F">Female
	                 </div>
	<div id="male"><input type="radio" name="rbtn" id="rbtn_male" style="width:80px; height:20px;" value="M">Male</div>
  </div>
  <div id="post" align="center"><input type="submit" value="Sign Up" name="submit" style="width:100px; height:40px;   border-radius:8px; font-size:17px;
  border-style:none;"></div>
  
  
</form>



</div>
<!-- about us content close-->
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