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
<head>
<!--<script language="javascript" src="valid.js"></script>-->
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
<div class="form_head">Edit Topics</div>
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
   xmlhttp.open("GET","findtopic_edit.php?subject="+subjectId, true);

   xmlhttp.send();

  }  
  
  function editTopic(sub_subject,topic_name) 
  { 
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
   xmlhttp.open("GET","findtopic_edit_return.php?subcat="+sub_subject+"&name="+topic_name, true);

   xmlhttp.send();

  }
  
</script>
<!--
<script>
arrRecords=new Array();
arrRecords[0]='btn_submit';
</script>-->
<div class="form_content" style="height:300px;">
<div class="form_main_line">
<div class="form_main_line_left">Select Subject</div>
<div class="form_main_line_right">
<select class="text" name="select" id="select" onChange="getTopics(this.value)">
  <option value="--select category--">--select Subject--</option>
  <?php 
	$sqlcat="select * from tbl_subj";
	$rscat=mysql_query($sqlcat);
    while($row=mysql_fetch_row($rscat))
    {
	?>
	<option  value="<?php  echo $row[0];?>"><?php  echo $row[1];?></option>
	<?php
	 }
	?>
  </select>
  </div>
</div>

<div class="form_main_line">
            <div class="form_main_line_left"> Topics</div>
            <div class="form_main_line_right">
            <div id="topic">  </div>
            </div>
   </div>

<div class="form_main_line">
            <div class="form_main_line_left"> </div>
            <div class="form_main_line_right">
            <div id="topic1"> 
<?php 
    if(isset($_POST['btn_submit']))
      {  
	     $subcat=$_POST['subcathidden'];
	     $topic_name=$_POST['topic_name'];
	     if( $topic_name==''||$topic_name==null )
            {
            $error = $error."please enter topic name";
              }
			  else
               {
	       $query="update tbl_subtopic  set topic_name='$topic_name' where id=".$subcat;
	 	 
           $result=mysql_query($query);
           header('location:sub_topic_view.php');  
              }
	  }
 
?>
  
             </div>
            </div>
   </div>
   
   
</div>
      <p id="pid"><?php echo $error; ?></p>
    </div>
	<div id="footer"></div>
   </div>
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