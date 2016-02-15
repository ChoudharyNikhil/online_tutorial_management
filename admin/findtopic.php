<?php
require_once("connect.php");
$subj_id=$_GET['subject']; 
 $sql="select * from tbl_subtopic where subj_id=$subj_id  limit 0,5";
 $rs=mysql_query($sql);
 $num=mysql_num_rows($rs);
 $i=1;
 if($num>0)
 {
 ?>
  <table align="center"  width="200px">
  <tr>
  <td><strong>Sr.No.</strong></td>
  <td><strong>Topic-name</strong></td>
  </tr>
  <?php
    while($row=mysql_fetch_row($rs))
      { 
    ?>
   <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $row[2]; ?></td>
   </tr>
	<?php
	  }
	?>
	</table>
<?php
 }
 else
 {
 echo"<p>&nbsp;&nbsp;&nbsp;&nbsp;no record found</p>";
 } 
?>