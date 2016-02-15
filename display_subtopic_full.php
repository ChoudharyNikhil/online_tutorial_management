<?php
 require_once("header.php");
 
   $subject_id = $_GET['sub_id'];
   $subtopic_id = $_GET['subtopic_id'];
   
  //start pagination

//code to get current page no
$page = (int) $_GET['page'];
if($page < 1) $page = 1;

$resultpPerpage = 4;
$startResults = ($page-1)* $resultpPerpage;
 
//total record 
$query1 ="select * from tbl_content where subj_id= $subject_id and subtopic_id= $subtopic_id";
$rs1 = mysql_query($query1);
$numRow=mysql_num_rows($rs1);
$totalPage=ceil($numRow/$resultpPerpage);

//echo $total; 
 
//query to get record
 $start =  $pageno;
 $query = "select * from tbl_content 
       where subj_id= $subject_id and subtopic_id= $subtopic_id
	  limit $startResults,$resultpPerpage  " ;

 $rs = mysql_query($query);
 
//pagination
 
 

 ?>
<div class="clear"></div>
<!--main content -->
<div id="div_content">

<div id="div_content_left">
<!-- new home menu -->
<div class="home_menu">
<ul>
   <li><a href="index.php">Home</a></li>
   <li><a href="#"><?php
   //query to display subject name
    $query1 = 'SELECT * FROM  tbl_subj  where id ='.$subject_id;
 $rs1 = mysql_query($query1);
 //echo $query1;
  $row1 = mysql_fetch_row($rs1);  
    echo $row1[1]; ?></a></li>
</ul>
</div>
<!-- new home menu close -->

<?php while($row = mysql_fetch_row($rs)){ ?>
<div id="div_left_main_content">

<div id="image">
<img src="<?php echo "admin/".$row[7] ?>" alt="android" />
<!--<div id="date">APR 12</div>
-->
</div>

<div id="heading"><?php echo $row[3] ?></div>
<label><?php echo $row[4] ?></label>
<a id="button" href="youtube.php?content_id=<?php echo $row[0]?>">Read More</a>
</div>
<div class="clear"></div>
<?php } ?>

<div id="pagination">
<div id="page_box">
<a id="page_link" href="#" name="page_link">First</a>
</div>
<?php
//code to display no of page according to record
for($i=1;$i<$totalPage;$i++)
{
	if($i == $page) {
?>

<div id="page_box">
<a id="page_link" name="page_link" href="display_subtopic_full.php?page=<?php echo $i; ?>"><?php echo "<strong>".$i."<strong>" ?></a>
</div>
<?php }//if 
  else {?>
	   <div id="page_box">
      <a id="page_link" name="page_link" href="display_subtopic_full.php?page=<?php      echo $i; ?>"><?php echo $i ?></a>
</div>
    <?php   }
 ?> 
<?php
	}
?>


<?php if($page >1 ) {?>
<div id="page_box">
<a id="page_link" href="#" name="page_link">Back</a>
</div>
<?php } ?>
</div>
</form>
</div>

<!--div_content_left close -->
<div id="div_content_right">
</div>
<!--div_content_right close -->
</div>
<?php require_once("footer.php"); ?>
</body>
</html>