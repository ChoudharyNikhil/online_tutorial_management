<script type="text/javascript">
function getSubcat(subjectId) { 

    //var strURL="findState.php?country="+countryId;
 if(window.XMLHttpRequest)
 {
	var xmlhttp=new XMLHttpRequest(); 
  }
  xmlhttp.onreadystatechange=function(){
     if(xmlhttp.readyState==4 && xmlhttp.status==200)
	 { 
	  document.getElementById('subsubject').innerHTML=xmlhttp.responseText;
     
    }      
  }
   xmlhttp.open("GET","findSubcat.php?subject="+subjectId, true);

   xmlhttp.send();

  }  
  
  
  
  function getSubtop(subjectId,sub_subject) { 

    //var strURL="findState.php?country="+countryId;
 if(window.XMLHttpRequest)
 {
	var xmlhttp=new XMLHttpRequest(); 
  }
  xmlhttp.onreadystatechange=function(){
     if(xmlhttp.readyState==4 && xmlhttp.status==200)
	 { 
	  document.getElementById('content').innerHTML=xmlhttp.responseText;
     
    }      
  }
   xmlhttp.open("GET","findContent.php?subject="+subjectId+"&subcat="+sub_subject, true);

   xmlhttp.send();

  }  
  
  
  
  
  
  
  
  
</script>
<?php 
require_once("connect.php");
 $querysub="select * from tbl_subj";
 $rssub=mysql_query($querysub);
 ?>
 
 <div id="subject">
 <select class="text" name="subject" id="subject" onChange="getSubcat(this.value)">

 <option value="--select Subject--">--select subject--</option>
<?php 
  
  
    while($row = mysql_fetch_row($rssub))
	{
		?>
 <option value="<?php echo $row[0] ?>"><?php  echo $row[1] ?></option>
 <?php } ?>
  </select>
  </div>
  
  <div id="subsubject"></div>
  <div id="content"></div>
  