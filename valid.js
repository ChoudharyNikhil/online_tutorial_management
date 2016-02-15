
function  blank_val(id)
{
	var user=(document.getElementById(id).value).trim();
	var name=document.getElementById(id).name;
   
	if(user=="")
	{   
	   
		document.getElementById('pid').innerHTML="please enter "+name;
		document.getElementById(id).focus();
		return false;
	}
   return true;
}
function  alpha_numeric()
{   // alert("hello");
	var user=(document.getElementById("add_cat").value).trim();
	//var name=document.getElementById(id).name;
    var alpha_exp=/^[a-zA-Z0-9]+$/;
	//alert(user.match(alpha_exp));
	if(user=="")
	{   
	   
		document.getElementById('pid').innerHTML="please enter  name";
		document.getElementById("add_cat").focus();
		return false;
	}
	else if(user.match(alpha_exp)==null)
	{   
	    //alert(user.match(alpha_exp));
		document.getElementById('pid').innerHTML="please  enter name as alphanumeric";
		document.getElementById("add_cat").focus();
		return false;
	}
	 
   return true;
}

function chk_pass()
{
	
  pass1 = (document.getElementById("text_new_pass").value).trim();
  pass2 = (document.getElementById("text_confirm_pass").value).trim();
  if(pass1 != pass2)
  {
	  document.getElementById('pid').innerHTML="please enter same password ";
	  document.getElementById("text_new_pass").value="";
	   document.getElementById("text_confirm_pass").value="";
	  document.getElementById("text_new_pass").focus();
	  return false;
  }
 return true;
}


function blankValidate(frmName,cntrArray)
{
 
  for(var i=0;i<cntrArray.length;i++)
  {
     var checkStr = eval("document."+frmName+"."+cntrArray[i]+".value");
	  

	 if(checkStr=="")
	  {
	     alert("Please Enter the Values in the Field");
		 eval("document."+frmName+"."+ cntrArray[i]+".focus()");
		 return false;
	  }
   }
   return true;
 }
 
 function chk_img_ext(id)
 { 
 
    
    name = (document.getElementById(id).value).trim(); 
	ext = (name.slice(name.lastIndexOf(".")+1,name.length)).toUpperCase();
	
	if(ext=="JPG" || ext=="GIF" || ext=="PNG")
     {
	  return true;
      }
   document.getElementById('pid').innerHTML="please enter only jpg, gif ,png format file";
   document.getElementById(id).value="";
   document.getElementById(id).focus();
   return false;
	
 }