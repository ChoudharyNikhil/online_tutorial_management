// JavaScript Document

function Required_Field_Validator(x,y){
if(document.getElementById(x).value==null || document.getElementById(x).value=="")
{
	document.getElementById(y).innerHTML='Field Cannot be Blank..!!';
	return false;
	}
	else if(document.getElementById(x).value!=null || document.getElementById(x).value!=""){
			document.getElementById(y).innerHTML="";

		}

}

function Email_Validator(x,y){
	var a=document.getElementById(x).value;
	var validate_Email=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z])+\.)+([a-zA-Z]{2,4})+$/;
	if(!validate_Email.test(a))
	{
		document.getElementById(y).innerHTML="Entered Email is not Correct..!!";
				return false;
		}
		else if (validate_Email.test(a)){
			document.getElementById(y).innerHTML="";
			}
	}
function mobile_Number_validator(x,y){
	var a=document.getElementById(x).value;
	var validate_Number=/^\d{10}$/;
	if(!validate_Number.test(a))
	{
		document.getElementById(y).innerHTML="Entered Mobile Number is not in correct format..!!";
		return false;
		}
		else if(validate_Number.test(a))
			{
		document.getElementById(y).innerHTML="";
				
				}
	}

function range_Validator_Password(x,y){
	var a=document.getElementById(x).value;
	var validate_Range=/^([a-zA-Z0-9_\.\-\@]){6,20}$/;
	if(!validate_Range.test(a))
	{
		document.getElementById(y).innerHTML="Pswd length should be 6-15 character(Allowed spl char @/-/./_)minimum ";
				return false;
		}
		else if (validate_Range.test(a)){
			document.getElementById(y).innerHTML="";
			}
	}
	
	function range_Validator_Username(x,y)
	{
	var a=document.getElementById(x).value;
	var validate_Range=/^([a-zA-Z0-9]){6,20}$/;
	if(!validate_Range.test(a))
	{
		document.getElementById(y).innerHTML="Username length should be 6-15 character minimum";
				return false;
		}
	
		else if (validate_Range.test(a))
		{
			document.getElementById(y).innerHTML="";
			}
	}
	function radio_check()
	{ 	
		var c=0;
		var a=document.getElementById('gender_Male').checked;
		var b=documnet.getElementById('gender_Female').checked;
		if(a==false || b==false)
		{
			c++;
		}
		
		
		else if(c==0)
		{
			document.getElementById('lbl_error_msg_Male').innerHTML="Gender must be selected..";
			return false;
		}
	}
	function confirm_password()
	{
	
		var p=document.getElementById('txt_Box_Password').value;
		var c=document.getElementById('txt_Box_C_Password').value;	
		if(p!=c)
		{
			document.getElementById('lbl_error_msg_C_Password').innerHTML="Password should not match..";
		}
		else
		
			document.getElementById('lbl_error_msg_C_Password').innerHTML="";

		
	}
		



	

