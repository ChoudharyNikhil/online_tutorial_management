<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>my project</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="img/ico" href="image/favicon.jpg" />
</head>

<body >
	<div id="div_master">
<div id="div_header">
<div id="logo">
<img src="image/logo1.png" width="400" height="150" alt="logo" />
</div>
    <div id="login">
	<h1><?php echo "welcome ".$uname;?></h1><br /><a href="signout.php">sign out</a> 
	</div>

<!--menu -->

<nav>
  <ul class="nav">
    <li style="background-color:#3298AB"><a href="index.php">Latest</a></li>
    <li><a href="#">Courses</a>
      <ul>
<?php
require_once('connect.php');
$sql2="select * from tbl_subj";
$rs2=mysql_query($sql2);
while($row2=mysql_fetch_array($rs2))
{
?>
  <li><a href="#"><?php echo $row2[1];?></a>
  <?php
  $subject_id=$row2[0];
  $sql3="select * from tbl_subtopic where subj_id=".$subject_id;
  $rs3=mysql_query($sql3);
   ?><ul><?php
   while($row3=mysql_fetch_array($rs3))
    {
    ?>
 
    <li ><a href="display_subtopic_full.php?sub_id=<?php echo $subject_id                  ?>&subtopic_id=<?php echo $row3[0]; ?>"
                 ><?php echo $row3[2];?></a></li>
   
    <?php } ?>
    </ul>
  </li>
  <?php 
  }
  ?>
  <ul >
    </ul></li>
        
      </ul>
    </li>
   
    <li><a href="#">Everything Else</a>
      <ul>
        <li><a href="about_us.php">about</a></li>
        <li><a href="contact_us.php">contact</a></li>
       </ul>
    </li>
    
  </ul>

<!--menu right-->
<div class="menu_right">
    <div class="menu_right_block">
	<img src="image/twitter.png" alt="twitter" longdesc="http://www.twitter.com" />
	</div>
    <div class="menu_right_block">
	<img src="image/facebook.png" alt="facebook" longdesc=  "http://www.facebook.com" />
	</div>
    <div class="menu_right_block">
	<img src="image/feed.png" alt="rss" />
	</div>
    <div class="menu_right_block">
	<img src="image/Googleplus.png" alt="google plus" longdesc="https://plus.google.com/" />
	</div>
</div>

</nav>
<!--menu close -->