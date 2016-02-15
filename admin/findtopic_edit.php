<?php
 require_once("connect.php");
 $subj_id=$_GET["subject"];
 $sql="select * from tbl_subtopic where subj_id=$subj_id ";
 $rs=mysql_query($sql);
 $num=mysql_num_rows($rs);
if($num>0)
 {
 ?>
  <table align="center" border="1px" width="300px">
 <tr>
 <td>Sr.No.</td>
 <td>Topic_name</td>
 <td>EDIT</td>
 </tr>
<?php
  $i=1;
 while($row=mysql_fetch_row($rs))
  {
  ?>
  <tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><input type="button" value="Edit" onClick="editTopic(<?php echo $row[0];?>,'<?php echo $row[2];?>' )" id="<?php echo $i; ?>" name="<?php echo $i; ?>"/>
    </td>
  </tr>
	<?php
	}
	?>
	</table>
	<!--<input type="button" onclick="return next($index,$num)" value="NEXT" name="btn_next" id="btn_next"/>-->
	 <?php
 }
 else
 {
 echo"<p>&nbsp;&nbsp;&nbsp;&nbsp;no record found</p>";
 }
   ?>