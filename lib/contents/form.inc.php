<?php
$page_title="Pendaftaran Anggota Baru";

?>

<form id="form1" name="form1" method="post" action="index.php?p=proses_daftar">
  <table class="border margined"  width="500" border="0">
    <tr>
      <td class="tblHead" width="112"></td>
      <td class="tblContent" width="290"><input name="id" type="hidden" id="id" size="4" /></td>
    </tr>
<tr>
      <td><input type="submit" name="button" id="button" value="Submit" /><input type="reset" name="button" id="button" value="Reset" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
     <td><?php echo __('Member ID'); ?></td>
      <td><input name="member_id" type="text" id="member_id" size="6" maxlength="6"/><b>diisi dengan NIM 5 digit terakhir</b></td>
    </tr>

<tr>
      <td><?php echo __('Personal ID Number');?></td>
      <td><input value="NIM lengkap" name="pin" type="text" id="pin" size="40" /></td>
    </tr>
<tr>
      <td>Angkatan</td>
      <td><select id="lstbln" class="inputstyle" name="inst_name">
                        <option selected="selected" value="2010">2010</option>
			<option  value="2009">2009</option>
			
			</select></td>
    </tr>
    <tr>
      <td><?php echo __('Member Name');?></td>
      <td><input name="member_name" type="text" id="textfield3" size="40" /></td>
    </tr>
<tr>
      <td><?php echo __('Birth Date');?> </td>
      <td><input name="birth_date" type="text" id="textfield3" size="10" maxlength="10" /><b>(yyyy-mm-dd)</b></td>
    </tr>

<tr>
      <td><?php echo __('Member Type');?></td>
      <td><select id="lstbln" class="inputstyle" name="member_type">
                        <option selected="selected" value="1">Undergraduate</option>
			<option  value="2">Lecture</option>
			<option value="3">Master</option>
			<option value="4">Doctoral</option>
                        <option value="5">Employee</option>
			</select></td>
    </tr>
<tr>
      <td><?php echo __('Gender');?></td>
      <td><select id="lstbln" class="inputstyle" name="gender">
			<option selected="selected" value="0">Male</option>
			<option value="1">Female</option>
			</select></td>
    </tr>
<tr>
      <td><?php echo __('Address');?></td>
      <td><textarea name="member_address" type="textarea" id="textfield3" cols="35" rows="6"></textarea></td>
    </tr>
<tr>
      <td><?php echo __('Postal Code');?></td>
      <td><input name="postal_code" type="text" id="textfield3" size="40" /></td>
    </tr>
<tr>
      <td><?php echo __('Phone Number');?></td>
      <td><input name="member_phone" type="text" id="textfield3" size="40" /></td>
    </tr>

<tr>
      <td><?php echo __('Member Email');?></td>
      <td><input name="member_email" type="text" id="textfield3" size="40" /></td>
    </tr>
<tr>
      <td><?php echo __('Password');?> </td>
      <td><input name="mpasswd" type="password" id="textfield3" size="40" /></td>
    </tr>
<tr>
      <td>Repeat Password</td>
      <td><input name="password" type="password" id="textfield3" size="40" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="button" id="button" value="Submit" /><input type="reset" name="button" id="button" value="Reset" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  
</form>
