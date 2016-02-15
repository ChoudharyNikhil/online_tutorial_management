<form method="post" name="frm_edit_sub">
  <table width="300" border="2" cellspacing="0" cellpadding="5">
    <tr>
      <td>Topic</td>
      <td><label for="topic_name"></label>
      <input type="text" name="topic_name" id="topic_name"  value="<?php echo $_GET['name'];?>" />
      </td>
    </tr>
   <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="update" />
    </div>
    </td>
    </tr>
    
  </table>

    <input type="hidden" value="<?php echo $_GET['subcat'];?>" id="subcathidden" name="subcathidden"/>
  <input type="hidden" value="<?php echo $_GET['name'];?>" id="namehidden" name="namehidden"/>
</form>
