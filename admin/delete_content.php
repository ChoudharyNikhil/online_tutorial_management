<?php 
require_once("connect.php");
$contentId=$_GET['content']; 
$query="delete from tbl_content where id='$contentId'";
$result=mysql_query($query);
echo "<br><center><mark>content is deleted.</mark></center>";
//header("location:content_view.php");
 ?>


