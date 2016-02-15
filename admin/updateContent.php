<?php 
require_once("connect.php");
$contentId=$_GET['content']; 
$query="select * from tbl_content where   id='$contentId'";
$result=mysql_query($query);
$row=mysql_fetch_array($result); 
 ?>

<form method="post" enctype="multipart/form-data">
  <table width="402" height="328" border="2" cellpadding="5" cellspacing="0">
    <tr>
      <td width="148">Heading</td>
      <td width="259"><label for="txt_heading"></label>
      <input type="text" name="txt_heading" id="txt_heading" value="<?php echo $row[3];?>"/></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><label for="txt_desc"></label>
      <input type="text" name="txt_desc" id="txt_desc" value="<?php echo $row[4];?>"/></td>
    </tr>
    <tr>
      <td>Content</td>
      <td><label for="txt_content"></label>
      <input type="text" name="txt_content" id="txt_content" value="<?php echo $row[5];?>" /></td>
    </tr>
    <tr>
      <td>Example</td>
      <td><label for="txt_example"></label>
      <input type="text" name="txt_example" id="txt_example" value="<?php echo $row[6];?>" /></td>
    </tr>
    <tr>
      <td>Snap Shot</td>
      <td><label for="txt_snap"></label>
      <img src=<?php echo $row['snapshot'];?> width="50" height="50"/>
      <input type="file" name="snap" id="snap" />
      </td>
    </tr>
    <tr>
      <td>Video</td>
      <td><label for="txt_video"></label>
      <input type="text" name="txt_video" id="txt_video" value="<?php echo $row[8];?>" /></td>
    </tr>
    <tr>
      <td>Upload file</td>
      <td><label for="txt_file"></label>
      <input type="file" name="upload" id="upload" value="<?php echo $row[9];?>"/></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="update" />
        <input type="submit" name="btn_delete" id="btn_delete" value="delete" />

      </div></td>
    </tr>
  </table>
  <input type="hidden" value="<?php echo $contentId;?>" id="contentid" name="contentid"/>
</form>




