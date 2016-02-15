<?php 
session_start();
ob_start();
if($_SESSION["session"]==1)
{

require_once("connect.php"); 
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
     <?php require_once("menu_subtopic.php"); ?>
<div id="content">
<div id="main_login">
 <div class="form_head">View Topics</div>
 <div class="form_content" style="height:300px;">
 <div class="form_main_line">
 <div class="form_main_line_left">Select Subject</div>

<script type="text/javascript">
function getTopics(subjectId) { 

    //var strURL="findState.php?country="+countryId;
 if(window.XMLHttpRequest)
 {
	var xmlhttp=new XMLHttpRequest(); 
  }
  xmlhttp.onreadystatechange=function(){
     if(xmlhttp.readyState==4 && xmlhttp.status==200)
	 { 
	  document.getElementById('topic').innerHTML=xmlhttp.responseText;
     
    }      
  }
   xmlhttp.open("GET","findtopic.php?subject="+subjectId, true);

   xmlhttp.send();

  }  
</script>
<div class="form_main_line_right">
   <select class="text" name="select" id="select" onChange="getTopics(this.value)">
  <option value="--select category--">--select Subject--</option>
  <?php 
	$sqlcat="select * from tbl_subj";
	$rscat=mysql_query($sqlcat);
	//var_dump($rscat);
    while($row=mysql_fetch_row($rscat))
    {
	?>
	<option  value="<?php  echo $row[0];?>"><?php  echo $row[1];?></option>
	<?php
	 }
	?>
  </select>
   </div><!--main line right div close-->
   </div><!--main line  div close-->
   <div class="form_main_line">
            <div class="form_main_line_left">All Topics</div>
            <div class="form_main_line_right">
            <div id="topic">  </div>
            </div>
   </div>
          
   
  </div><!--form content div close-->
</div><!--main login close-->
	<div id="footer"></div>
   </div><!--content div close-->
</div><!--main div close-->
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