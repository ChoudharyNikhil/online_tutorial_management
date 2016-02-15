<?php
session_start();
ob_Start();
 require_once("header1.php");

 
 $content_id   = $_GET['content_id'];

 
 $query = 'select * from tbl_content where
              id ='. $content_id;
 $rs = mysql_query($query);
 $row = mysql_fetch_row($rs);

 ?>
<div class="clear"></div>
<!--main content -->
<div id="div_content">

<div id="div_content_left1">
<!-- new home menu -->
<div class="home_menu">
<ul>
   <li><a href="index.php">Home</a></li>
   <li><a href="#"><?php
   //query to display subject name
    $query1 = 'SELECT * FROM  tbl_subj  where id ='.$row[1];
 $rs1 = mysql_query($query1);
  $row1 = mysql_fetch_row($rs1);  
    echo $row1[1]; ?></a></li>
</ul>
</div>
<!-- new home menu close -->

<h1 style="padding-left:10px;"><font color="blue"><?php echo $row[3];?></font></h1> 
<p style="padding-left:15px; font-size:16px; font-family:'Times New Roman', Times, serif"><?php echo $row[5];?></p>
<p style="color:#FF0000;padding-left:10px;font-size:30px;"><b><u>Example</u></b></p> <pre><p style="padding-left:15px;font-size:16px; font-family:'Times New Roman', Times, serif"> <?php echo $row[6];?></p></pre>
<br /><br />
<div><a href="#" name="download" download="<?php echo 'admin/'.$row[9];?>" id="download" style="text-decoration:none; background-color:#DADADA; color:#EC6C20; font-size:22px; margin-left:20px;"/>
pdf Download</a><br /><br /><br /><br />

<iframe title="YouTube video player" class="youtube-player" type="text/html" 
width="640" height="390" src="<?php echo "http://".$row[8]; ?>"
frameborder="0" allowFullScreen></iframe>




</div>
<!--div_content_left close -->
<!--div_content_right close -->
</div>
<?php require_once("footer.php"); ?>
</body>
</html>
