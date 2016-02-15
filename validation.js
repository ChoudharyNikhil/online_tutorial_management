function login()
{

  var name=document.getElementById('txt_username').value
  var pass=document.getElementById('txt_pass').value
  if(name=="")
  {
     alert("Please Enter your Name");
	 document.getElementById('txt_username').focus();
	 return false;
  }
  if(pass=="")
  {
     alert("Please Enter your Password");
	 document.getElementById('txt_pass').focus();
	 return false;
  }
  if(name!="" && pass!="")
  {
     window.location("index.php");
  }
}
function validation()
{
	
	var email = document.getElementById('txt_email');
	var comment=document.getElementById('txt_comment');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-z\-])+\.)+([a-zA-Z]{2,4})+$/;
	
	//check that value should not be empty..
	
	 if(email.value=="" || email.value==null)
	{
		
		//alert("please enter email");
			document.getElementById('msg').innerHTML="Please enter email id";
			email.focus;
			return false;
	}
	else if(!(email.value.match(filter)))	//check valid email id ...
	 {
    
		document.getElementById('msg').innerHTML="Please enter  valid email id";
    	email.focus;
    	return false;
	 }
	 else if(comment.value=="" || comment.value==null)
	 {
		 	document.getElementById('msg1').innerHTML="Please enter comment";
			comment.focus;
			return false;
	 }
}
	

/*function valid()
{
  var name=document.getElementById('txt_first').value;
  var last=document.getElementById('txt_last').value;
  var email=document.getElementById('txt_email').value;
  var remail=document.getElementById('txt_remail').value;
  var pass=document.getElementById('txt_pass').value;
  var month=document.getElementById('cmb_month').value;
  var day=document.getElementById('cmb_day').value;
  var year=document.getElementById('cmb_year').value; 
   var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-z\-])+\.)+([a-zA-Z]{2,4})+$/;
  if(name=="")
  {
     document.getElementById('msgg').innerHTML="Please enter ur name";
	 document.getElementById('txt_first').focus();
	 return false;
   }
   if(last=="")
  {
     document.getElementById('msg_last').innerHTML="Please enter ur last name";
	 document.getElementById('txt_last').focus();
	 return false;
   }
   if(email=="")
  {
     document.getElementById('msg_email').innerHTML="Please enter ur email id";
	 document.getElementById('txt_email').focus();
	 return false;
  }
   if(remail=="")
  {
     document.getElementById('msg_remail').innerHTML="Please re-enter ur email id";
	 document.getElementById('txt_remail').focus();
	 return false;
   }
   if(email!=remail)
   {
     document.getElementById('msg_remail').innerHTML="Please enter same email id";
	document.getElementById('txt_remail').focus();
	 return false;
   }
   if(!(email.value.match(filter)))	//check valid email id ...
	 {
    
		document.getElementById('msg_remail').innerHTML="Please enter  valid email id";
    	email.focus;
    	return false;
	 }
   if(pass=="")
  {
     document.getElementById('msg_pass').innerHTML="Please enter ur password";
	 document.getElementById('txt_pass').focus();
	 return false;
   }
   
   if(month=="")
  {
     document.getElementById('msg_month').innerHTML="Select month";
	 document.getElementById('cmb_month').focus();
	 return false;
   }
    if(day=="")
  {
     document.getElementById('msg_day').innerHTML="Select day";
	 document.getElementById('cmb_day').focus();
	 return false;
   }
   if(year=="")
  {
     document.getElementById('msg_year').innerHTML="Select year";
	 document.getElementById('cmb_year').focus();
	 return false;
   }
}
*/


function valid()
{
  var name=document.getElementById('txt_first').value;
  var last=document.getElementById('txt_last').value;
  var email=document.getElementById('txt_email').value;  
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-z\-])+\.)+([a-zA-Z]{2,4})+$/;
		
  var remail=document.getElementById('txt_remail').value;
  var pass=document.getElementById('txt_pass1').value;
  var month=document.getElementById('cmb_month').value;
  var day=document.getElementById('cmb_day').value;
  var year=document.getElementById('cmb_year').value; 
  if(name=="")
  {
     document.getElementById('msg_name').innerHTML="Please enter     ur name";
	 document.getElementById('txt_first').focus();
	 return false;
  }
  if(last=="")
  {
     document.getElementById('msg_last').innerHTML="Please enter     ur last name";
	 document.getElementById('txt_last').focus();
	 return false;
  }
  if(email=="")
  {
     document.getElementById('msg_email').innerHTML="Please enter     ur email id";
	 document.getElementById('txt_email').focus();
	 return false;
  }
  else if(!(email.match(filter)))	//check valid email id  
  {
    document.getElementById('msg_email').innerHTML="enter valid    email id";
	document.getElementById('txt_email').focus();
    return false;
  }
  if(remail=="")
  {
    document.getElementById('msg_remail').innerHTML="Please   		    re-enter ur email id";
	document.getElementById('txt_remail').focus();
	return false;
  }
  else if(email!=remail)
  { 
    document.getElementById('msg_remail').innerHTML="Please enter    same email id";
	document.getElementById('txt_remail').focus();
	return false;
  }
  if(pass=="" || pass==NULL)
  {   
    document.getElementById('msg_pass').innerHTML="Please enter ur    password";
	document.getElementById('txt_pass1').focus();
	return false;
  }
   
  if(month=="1")
  {
     document.getElementById('msg_month').innerHTML="Select month";
	 document.getElementById('cmb_month').focus();
	 return false;
   }
    if(day=="Day")
  {
     document.getElementById('msg_day').innerHTML="Select day";
	 document.getElementById('cmb_day').focus();
	 return false;
   }
   if(year=="1")
  {
     document.getElementById('msg_year').innerHTML="Select year";
	 document.getElementById('cmb_year').focus();
	 return false;
   }
}
function pic_big(id)
{
	document.getElementById(id).height=80;
	document.getElementById(id).width=150;
	}
function pic_small(id)
{
	document.getElementById(id).height=50;
	document.getElementById(id).width=50;
	}
function validate()
{
	var name= document.getElementById('name').value
	var email = document.getElementById('txt_email');	
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-z\-])+\.)+([a-zA-Z]{2,4})+$/;
		var msg2=document.getElementById('msg1').value;

	//check that value should not be empty..
     if(name=="")
     {
         //alert("Please Enter your Name");
         document.getElementById('msg').innerHTML="Please enter your name";
          document.getElementById('name').focus();
	 return false;
  }
	 if(email.value=="" || email.value==null)
	{
		
		//alert("please enter email");
			document.getElementById('msg').innerHTML="Please enter email id";
			email.focus;
			return false;
	}
	else if(!(email.value.match(filter)))	//check valid email id ...
	 {
    
		document.getElementById('msg').innerHTML="Please enter  valid email id";
    	email.focus;
    	return false;
	 }
if(msg2=="")
{
	
		document.getElementById('msg').innerHTML="Please enter  message";
    	document.getElementById('msg1').focus;
    	return false;
}
	 
	  	
}