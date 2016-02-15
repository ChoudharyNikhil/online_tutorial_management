<?php
$link = mysql_pconnect('localhost','root','');
$rs = mysql_select_db('tuto',$link);
if(! $rs)
{
  echo "unable to connect tutorial_db";	
}

?>
