<?php 
require_once("connect.php");
$subjectId=$_GET['subject']; 
$subcatId=$_GET['subcat'];
$query="select * from tbl_content where subj_id='$subjectId' and  subtopic_id='$subcatId'";
$result=mysql_query($query);
?>
<select onchange="getAllContent(this.value)">
<option>--select--topic</option>
<?php
 while($row=mysql_fetch_array($result)) { ?>
   <option value="<?php echo $row[0];?>">
   <?php echo $row[3];?>
   </option>

<?php } ?>
</select>
<!--</select>-->
