<?php
session_start();
ob_start();
if($_SESSION["session"]==1)
{
require_once("connect.php");
$id=$_GET["id"];
$error ='';
$sql="delete from tbl_subtopic where id=$id";
$rs=mysql_query($sql);
  if($rs==true)
  {
   $sql1="delete from tbl_content where subtopic_id=$id";
   $rs1=mysql_query($sql1);
   }
header("location:sub_topic_view.php");
}
else
{
header("location:index.php");	
}
?>