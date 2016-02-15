<?php
ob_start();
require_once("connect.php");
$id=$_GET["id"];
$status=$_GET["status"];
if($status=="disable")
{
$sql="update tbl_user set status=0 where id=$id";
}
else
{
$sql="update tbl_user set status=1 where id=$id";
}
mysql_query($sql);
header("location:view_user.php");
ob_flush();
?>