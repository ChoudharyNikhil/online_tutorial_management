<?php
session_start();
ob_start();
if($_SESSION["session"]==1)
{
require_once("connect.php");
 $error ='';
 $querysub="select * from tbl_subj";
 $rssub=mysql_query($querysub);
	
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
     <?php require_once("menu_content.php"); ?>
  <div id="content">
      <div id="main_login">
        <div class="form_head">Delete Contents</div>
        <script type="text/javascript">
function getSubcat(subjectId) { 

    //var strURL="findState.php?country="+countryId;
 if(window.XMLHttpRequest)
 {
	var xmlhttp=new XMLHttpRequest(); 
  }
  xmlhttp.onreadystatechange=function(){
     if(xmlhttp.readyState==4 && xmlhttp.status==200)
	 { 
	  document.getElementById('subsubject').innerHTML=xmlhttp.responseText;
     
    }      
  }
   xmlhttp.open("GET","findSubcat.php?subject="+subjectId, true);

   xmlhttp.send();

  }  
  
  
  
  function getSubtop(subjectId,sub_subject) { 

    //var strURL="findState.php?country="+countryId;
 if(window.XMLHttpRequest)
 {
	var xmlhttp=new XMLHttpRequest(); 
  }
  xmlhttp.onreadystatechange=function(){
     if(xmlhttp.readyState==4 && xmlhttp.status==200)
	 { 
	  document.getElementById('content1').innerHTML=xmlhttp.responseText;
     
    }      
  }
   xmlhttp.open("GET","findContent.php?subject="+subjectId+"&subcat="+sub_subject, true);

   xmlhttp.send();

  }
  
  //fetch conteny
  function getAllContent(contentId) { 

    //var strURL="findState.php?country="+countryId;
 if(window.XMLHttpRequest)
 {
	var xmlhttp=new XMLHttpRequest(); 
  }
  xmlhttp.onreadystatechange=function(){
     if(xmlhttp.readyState==4 && xmlhttp.status==200)
	 { 
	  document.getElementById('onlycontent').innerHTML=xmlhttp.responseText;
     
    }      
  }
   xmlhttp.open("GET","delete_content.php?content="+contentId, true);

   xmlhttp.send();

  }   
</script>
        <div class="form_content">
          <div class="form_main_line">
            <div class="form_main_line_left">Subjects</div>
            <div class="form_main_line_right">
              <?php 
      require_once("connect.php");
 $querysub="select * from tbl_subj";
 $rssub=mysql_query($querysub);
 ?>
 
 <div id="subject">
 <select class="text" name="subject" id="subject" onChange="getSubcat(this.value)">

 <option value="--select Subject--">--select subject--</option>
<?php 
  
  
    while($row = mysql_fetch_row($rssub))
	{
		?>
 <option value="<?php echo $row[0] ?>"><?php  echo $row[1] ?></option>
 <?php } ?>
  </select>
  
       </div>
          </div>
          <!--subject select close-->
          
          <div class="form_main_line">
           
            <div class="form_main_line_right">
              <div id="subsubject"></div>
            </div>
          </div>
          <div class="form_main_line">
          <div class="form_main_line_right">
                    <div id="content1"></div>
                    </div>
                    </div>
          <!--subtopic select close-->
          <!--content display-->
                  <div class="form_main_line">
                 <div class="form_main_line_right">

                    <div id="onlycontent"></div>
                 </div></div>          
         
          <div class="form_main_line" align="center">
            <p style="color:#FF0000;" id="pid"><?php echo $error; ?></p>
          </div>
        </div>
      </div>
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