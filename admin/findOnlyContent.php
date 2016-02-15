<?php 
require_once("connect.php");
$contentId=$_GET['content']; 
$query="select * from tbl_content where   id='$contentId'";
$result=mysql_query($query);
?>

<?php
 while($row=mysql_fetch_array($result)) { ?>
      <h1><?php echo $row[3];?></h1>
      
      <h5><?php echo $row[5];?></h5>
<?php } ?>


