<?php 
require_once("connect.php");
$subject=$_GET['subject']; 
$query="select * from tbl_subtopic where subj_id='$subject'";
$result=mysql_query($query);
 while ($row=mysql_fetch_array($result)) { ?>
<li><a href="#" onClick=""><?php echo $row[2];?></a></li>

<?php } ?>
</body>
</html>
