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


<form method="post" onSubmit="return valid()">
  <div id="name">
     <div id="first">
	    <div id="first_txt" align="right"><input type="text" name="txt_first" id="txt_first" placeholder="Enter your first name" style="width:250px; height:40px; border-radius:5px;">
		</div>
		<div id="first_place" align="center"><font color="#FF0000" id="msg_name"></font></div>
	 </div>
	 <div id="last">
	    <div id="last_txt" align="left"><input type="text" name="txt_last" id="txt_last" placeholder="Enter your last name" style="width:250px; height:40px; border-radius:5px;"></div>
		<div id="last_place" align="center"><font color="#FF0000" id="msg_last"></font></div>
	 </div>
  </div><br />
  <div id="email" align="center">
      <div id="email_txt"><input type="text" name="txt_email" id="txt_email" placeholder="Enter your email" style="width:500px; height:40px;border-radius:5px;"></div>
		<div id="email_place"><font color="#FF0000" id="msg_email"></font></div>
  </div><br />
  <div id="remail" align="center">
     <div id="remail_txt"><input type="text" name="txt_remail" id="txt_remail" placeholder="Re-enter your email" style="width:500px; height:40px;border-radius:5px;"></div>
		<div id="remail_place"><font color="#FF0000" id="msg_remail"></font></div><br />
  </div>
  <div id="password" align="center">
     <div id="pass_txt"><input type="password" name="txt_pass" id="txt_pass1" placeholder="Enter your Password" style="width:500px; height:40px; border-radius:5px;"></div>
		<div id="pass_place"><font color="#FF0000" id="msg_pass"></font></div>
  </div><br />
  <div id="birth" >
     <div id="birthday"><font size="+1" style="margin-left:140px;">DOB:</font>
       <select name="cmb_month" id="cmb_month" style="width:115px;border-radius:5px;">
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
         <font color="#FF0000" id="msg_month"></font>
       </select>
       <select name="cmb_day" id="cmb_day" style="width:115px;border-radius:5px;">
         <option value="Day">Day</option>
         <?php
					 for($i=1; $i<=31; $i++)
					 {
					     if($_POST['cmb_year']==$i)
						 {
					 ?>
         <option selected="selected" value="<?php echo $i;?>"> <?php echo $i;?></option>
         <?php }
					 else
					 {
					 ?>
         <option value="<?php echo $i;?>"> <?php echo $i;?></option>
         <?php }}?>
         <font color="#FF0000" id="msg_day"></font>
       </select>
       <select name="cmb_year" id="cmb_year" style="width:115px;border-radius:5px;">
         <option value="1">Year</option>
         <?php
					 for($i=1880; $i<=2014; $i++)
					 {
					     if($_POST['cmb_year']==$i)
						 {
					 ?>
         <option selected="selected" value="<?php echo $i;?>"> <?php echo $i;?></option>
         <?php }
					 else
					 {
					 ?>
         <option value="<?php echo $i;?>"> <?php echo $i;?></option>
         <?php }}?>
         <font color="#FF0000" id="msg_year"></font>
       </select>
     </div>
	 <div id="month"></div>
	 <div id="day"></div>
	 <div id="year"></div>
  </div><br />
  <div id="gender">
    <div id="g_name"><font size="+1" color="black" style="margin-left:140px;">Gender:</font>
      <input type="radio" name="rbtn" id="rbtn_female" value="F" />
      Female
      <input type="radio" name="rbtn" id="rbtn_male"  value="M" />
      Male
    </div>
	<div id="female"></div>
	<div id="male"></div>
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