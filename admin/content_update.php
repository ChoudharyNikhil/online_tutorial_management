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
        <div class="form_head">Edit Contents</div>
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
	  document.getElementById('onlycontent11').innerHTML=xmlhttp.responseText;
     
    }      
  }
   xmlhttp.open("GET","updateContent.php?content="+contentId, true);

   xmlhttp.send();

  }  

  //fetch conteny
  
  
  
  
  
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
            <div class="form_main_line_left">subcategory</div>
            <div class="form_main_line_right">
              <div id="subsubject">
              <select><option>--select category</option></select>
              </div>
            </div>
          </div>
          <br />
          <div class="form_main_line">
          <div class="form_main_line_left">Topic</div>
          <div class="form_main_line_right">
                    <div id="content1">
                    <select><option>Select Topic</option></select>
                    </div>
  
  <?php 
     if(isset($_POST['btn_submit']))
    {  
	   
      $subject=$_GET['subject'];   
      $subcat=$_GET['subcat'];
      // $subject=1;$subcat=1;
       if(isset($_FILES))
	   {
        $snap=$_POST["snap"];
        
	    $file_name=$_FILES['snap']['name'];
		$file_name=strtoupper($file_name);
        $tmp=$_FILES['snap']['tmp_name'];
        $path="image/".$file_name;
        move_uploaded_file($tmp,$path);
	     }
		 else
		 {
		 $path=null;
            }
		$cid=$_POST['contentid'];	
   	  $heading =   $_POST['txt_heading'];
	  $desc    =   $_POST['txt_desc']; 
	  $content =   $_POST['txt_content'];
	  
	  $example =   $_POST['txt_example'];
	  //$snap =   $_GET['txt_snap'];
	  if(isset( $_POST['txt_video']))
	  {
	  $video=$_POST['txt_video']; 
	  }else{
	  $video=null; 
	  }
	  if(isset($_FILES))
	   {
        $upload=$_POST["upload"];
        
	    $file_name=$_FILES['upload']['name'];
		$file_name=strtoupper($file_name);
        $tmp=$_FILES['upload']['tmp_name'];
        $path1="books/".$file_name;
        move_uploaded_file($tmp,$path1);
	     }
		 else
		 {
		 $path1=null;
            }
  
     
		
	$query="update tbl_content set heading='$heading', description='$desc', content='$content', example='$example',snapshot='$path',vediolink='$video',upload_file='$path1' where id=$cid" ;
	 	 
    $result=mysql_query($query);
	echo "<br><center><mark>Content is updated</mark></center>";
	//header("location:content_view.php");
  }// if update submit
 if(isset($_POST['btn_delete']))
    {
		$cid=$_POST['contentid'];
  $query="delete from tbl_content where id='$cid'";
  $result=mysql_query($query);
  echo "<br><center><mark>content is deleted.</mark></center>";
  //header("location:content_view.php");
	}// if submit delete
?>
                 <div id="onlycontent11">
                
                  </div>
                    
                    </div>
                    </div>
                    </div>
          <!--subtopic select close-->
                   
         
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