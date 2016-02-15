<?php
$link = mysql_pconnect('localhost','root','');
$rs = mysql_select_db('tutorials',$link);
if(! $rs)
{
  echo "unable to connect tutorial_db";	
}

?>
