<script language="javascript" src="valid.js"></script>
 <script>
arrRecords=new Array();
arrRecords[0]='add_content';
</script>
<form method="post" enctype="multipart/form-data" onsubmit="javascript:return blankValidate('frm_add_content',arrRecords)">
  <table width="328" border="2" cellspacing="0" cellpadding="5">
    <tr>
      <td width="82">Heading</td>
      <td width="218"><label for="txt_heading"></label>
      <input type="text" name="txt_heading" id="txt_heading" /></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><label for="txt_desc"></label>
      <input type="text" name="txt_desc" id="txt_desc" /></td>
    </tr>
    <tr>
      <td>Content</td>
      <td><label for="txt_content"></label>
      <input type="text" name="txt_content" id="txt_content" /></td>
    </tr>
    <tr>
      <td>Example</td>
      <td><label for="txt_example"></label>
      <input type="text" name="txt_example" id="txt_example" /></td>
    </tr>
    <tr>
      <td>Snap Shot</td>
      <td><label for="txt_snap"></label>
      <input type="file" name="snap" id="snap" /></td>
    </tr>
    <tr>
      <td>Video</td>
      <td><label for="txt_video"></label>
      <input type="text" name="txt_video" id="txt_video" /></td>
    </tr>
    <tr>
      <td>Upload file</td>
      <td><label for="txt_file"></label>
      <input type="file" name="upload" id="upload" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div></td>
    </tr>
  </table><input type="hidden" value="<?php echo $_GET['subject'];?>" id="subjecthidden" name="subjecthidden"/>
  <input type="hidden" value="<?php echo $_GET['subcat'];?>" id="subcathidden" name="subcathidden"/>
</form>

