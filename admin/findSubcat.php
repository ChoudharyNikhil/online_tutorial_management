<?php 
require_once("connect.php");
//require_once("findContent.php");
$subject=$_GET['subject']; 
//echo $subject;
$query="select * from tbl_subtopic where subj_id='$subject'";
$result=mysql_query($query);
?>
<select class="text" name="subcat" id="subcat" onChange="getSubtop(<?php echo $subject;?>,this.value)" >
                <option value="--select Subtopic--">--select subtopic--</option>
<?php while ($row=mysql_fetch_array($result)) { ?>

<option value="<?php echo $row['id'];?>"> <?php echo $row['topic_name'];?> </option>

<?php } ?>

</select>
</body>
</html>