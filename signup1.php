<?php
if(isset($_REQUEST['btn_Register']))
{
$name=$_REQUEST['txt_Box_Name'];
$email=$_REQUEST['txt_Box_Email'];
$mobile=$_REQUEST['txt_Box_Mobile'];
$dob=$_REQUEST['txt_Box_DOB'];
$gender=$_REQUEST['gender'];
$address=$_REQUEST['txtAreaAddress'];
$username=$_REQUEST['txt_Box_Username'];
$password=$_REQUEST['txt_Box_Password'];
if(isset($name) && $name!="" && isset($email) && $email!="" && isset($mobile) && $mobile!="" && isset($dob) && $dob!="" && isset($gender) && $gender!="" && isset($username) && $username!="" && isset($password) && $password!="" )
{
$_SESSION['user']=$username;
$sql="insert into tbl_users values('','$name','$email','$mobile','$dob','$gender','$address','$username','$password',0,now())";
$query=mysql_query($sql);

$msg1='<h4 style="margin-left:10px;color:white;">Your Registration is successful, you have to wait for approval for your login authority.';
}
}


?>


<div style="height:60px; border-bottom:#FFFFFF solid 1px;">
<h2 class="heading_Login" >Signup Here</h2>
</div>
<form method="post" onsubmit="return radio_check()">
<table class="table_Signup" style="height:200px; margin-left:170px;">

<tr>
<td >Full Name<br /><input type="text" name="txt_Box_Name" placeholder="Enter Name" class="input_Signup" id="txt_Box_Name" onblur="return Required_Field_Validator('txt_Box_Name','lbl_error_msg_name')"  />

</td>
<td>Date of Birth<br /><input type="text" name="txt_Box_DOB" id="txt_Box_DOB" class="input_Signup" placeholder="DD-MM-YY" onblur="return Required_Field_Validator('txt_Box_DOB','lbl_error_msg_dob')" /></td>
<td>Username<br /><input type="text" name="txt_Box_Username" class="input_Signup" id="txt_Box_Username" placeholder="Enter Usrername"  onblur="return range_Validator_Username('txt_Box_Username','lbl_error_msg_Username')"/></td>

</tr>
<tr><td class="table_label"><label id="lbl_error_msg_name"></label></td><td class="table_label"><label id="lbl_error_msg_dob"></label></td><td class="table_label"><label id="lbl_error_msg_Username"></label></td></tr>
<tr>

<td>Email<br /><input type="text" name="txt_Box_Email" class="input_Signup" id="txt_Box_Email" placeholder="Enter Email Id" onblur="return Email_Validator('txt_Box_Email','lbl_error_msg_Email')"/></td>
<td><input type="radio" name="gender"  id="gender_Male" value="Male" onchange="return radio_check()"/>Male <input type="radio" name="gender" id="gender_Female" value="Female"onchange="return radio_check()" />Female</td>
<td>Password<br /><input type="password" name="txt_Box_Password" class="input_Signup" id="txt_Box_Password" placeholder="Enter Password" onblur="return range_Validator_Password('txt_Box_Password','lbl_error_msg_Password')"/></td>

</td>
</tr>
<tr><td class="table_label"><label id="lbl_error_msg_Email"></label></td><td class="table_label"><label id="lbl_error_msg_Male"></label></td><td class="table_label"><label id="lbl_error_msg_Password"></label></td></tr>
<tr>
<td>Mobile<br /><input type="text" name="txt_Box_Mobile" class="input_Signup" id="txt_Box_Mobile" placeholder="Enter Mobile Number" onblur="return mobile_Number_validator('txt_Box_Mobile','lbl_error_msg_Mobile')"/></td>
<td>Address<br /><textarea name="txtAreaAddress" rows="3" style="width:210px;" id="txt_Box_Address"  onblur="return Required_Field_Validator('txt_Box_Address','lbl_error_msg_Address')"></textarea></td>
<td>Confirm Password<br /><input type="password" name="txt_Box_C_Password" class="input_Signup" id="txt_Box_C_Password" placeholder="Confirm Password" onblur="return confirm_password()"/></td>
</tr>

<tr><td class="table_label"><label id="lbl_error_msg_Mobile"></label></td ><td class="table_label"><label id="lbl_error_msg_Address"></label></td><td class="table_label"><label id="lbl_error_msg_C_Password"></label></td></tr>


</table>
<table class="table_Signup" style="margin-top:0px; height:180px;  margin-left:170px;">
<tr><td>Ist Reference Name<br /><input type="text" name="txt_Box_Ref1" class="input_Signup" id="txt_Box_Ref1" placeholder="Ist Reference Name" onblur="return range_Validator_Username('txt_Box_Ref1','lbl_error_msg_Ref1')"/></td>
<td>Ist Ref. Mobile<br /><input type="text" name="txt_Box_Ref1_Mobile" class="input_Signup" id="txt_Box_Ref1_Mobile" placeholder="Ist Reference Mobile" onblur="return mobile_Number_validator('txt_Box_Ref1_Mobile','lbl_error_msg_Ref1_Mobile')"/></td>
<td>Ist Ref. Email<br /><input type="text" name="txt_Box_Ref1_Email" class="input_Signup" id="txt_Box_Ref1_Email" placeholder="Ist Reference Email" onblur="return Email_Validator('txt_Box_Ref1_Email','lbl_error_msg_Ref1_Email')"/></td>
</tr>

<tr><td class="table_label"><label id="lbl_error_msg_Ref1"></label></td><td class="table_label"><label id="lbl_error_msg_Ref1_Mobile"></label></td><td class="table_label"><label id="lbl_error_msg_Ref1_Email"></label></td></tr>

<tr><td>2nd Reference Name<br /><input type="text" name="txt_Box_Ref2_Email" class="input_Signup" id="txt_Box_Ref2" placeholder="2nd Reference Name" onblur="return range_Validator_Username('txt_Box_Ref2','lbl_error_msg_Ref2')"/></td>
<td>2nd Ref. Mobile<br /><input type="text" name="txt_Box_Ref2_Mobile" class="input_Signup" id="txt_Box_Ref2_Mobile" placeholder="2nd Reference Mobile" onblur="return mobile_Number_validator('txt_Box_Ref2_Mobile','lbl_error_msg_Ref2_Mobile')"/></td><td>2st Ref. Email<br /><input type="text" name="txt_Box_Ref2_Email" class="input_Signup" id="txt_Box_Ref2_Email" placeholder="2nd Reference Email" onblur="return Email_Validator('txt_Box_Ref2_Email','lbl_error_msg_Ref2_Email')" /></td>
</tr>

<tr><td class="table_label"><label id="lbl_error_msg_Ref2"></label></td><td class="table_label"><label id="lbl_error_msg_Ref2_Mobile"></label></td><td class="table_label"><label id="lbl_error_msg_Ref2_Email"></label></td></tr>




<tr><td></td><td></td><td><input type="submit" value="Register" name="btn_Register" class="btnSubmit" id="btn_Register" onclick="return validateSignUp();" style="float:right; margin-top:5px;width:100px;"  /></td></tr>

</table>
<?php
if(isset($msg1)){
echo $msg1;
}
?>

</form>
