<?php
session_start();
ob_start();
if($_SESSION["session"]==1)
{
require_once("connect.php");
$sub_name=$_GET["sub_name"];
$sub_id=$_GET["id"];
$error ='';
$sql="delete from tbl_subj where id=$sub_id";
$rs=mysql_query($sql);
//var_dump($rs);
  if($rs==true)
  {
 $sql1="delete from tbl_subtopic where subj_id=$sub_id ";
 $rs1=mysql_query($sql1);
    if($rs1==true)
	{
 $sql2="delete from tbl_content where subj_id=$sub_id ";
 $rs2=mysql_query($sql2);
	}
  }
  header("location:subject_view_delete.php");
}
else
{
header("location:index.php");	
}
?>
