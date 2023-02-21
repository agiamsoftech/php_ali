<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[st_id])
	{
		$SQL="SELECT * FROM student WHERE st_id = '$_REQUEST[st_id]'";
		$rs=mysql_query($SQL) or die(mysql_error());
		$data=mysql_fetch_assoc($rs);
	}
?>
<form action="lib/student.php" enctype="multipart/form-data" name="student_frm" onsubmit="return valid_student(this);" method="post">
<table width="90%" border="1" align="center">
<tr>
    	<th colspan="4">Student Registration Form </th>
	</tr>
<tr>
    <th>Name</th>
    <td>
		<input name="st_name" type="text" id="st_name" placeholder="Name Please *" value="<?php echo $data['st_name']; ?>" />	</td>
    	<th>Father's Name </th>
    <td>
		<input name="st_father" type="text" id="st_father" placeholder="Father's Name *" value="<?php echo $data['st_father']; ?>" />	</td>
</tr>
<tr>
    <th>Address1</th>
    <td>
		<textarea name="st_add1" id="st_add1"><?php echo $data['st_add1']; ?></textarea>	</td>
    	<th>Address2</th>
    <td>
		<textarea name="st_add2" id="st_add2"><?php echo $data['st_add2']; ?></textarea>	</td>
</tr>
<tr>
    <th>City *</th>
    <td>
		<select name="st_city" id="st_city">
    	<?php echo get_option_list("city","city_id","city_name",$data[st_city]); ?>
		</select>	</td>
    <th>State</th>
    <td>
		<select name="st_state" id="st_state">
    	<?php echo get_option_list("state","state_id","state_name",$data[st_state]); ?>
		</select>	</td>
</tr>
<tr>
    <th>Country *</th>
    <td>
		<select name="st_country" id="st_country">
	   	<?php echo get_option_list("country","country_id","country_name",$data[st_country]); ?>
    	</select>	</td>
    <th>Nationality</th>
    <td>
		<input name="st_nationality" type="text" id="st_nationality" value="<?php echo $data['st_nationality']; ?>"/>	</td>
</tr>
<tr>
    <th>Gender *</th>
    <td>
		<input name="st_gender" type="radio" value="male"  <?php if($data[st_gender]=="male") echo "checked";  ?> />Male
		<input name="st_gender" type="radio" value="female" <?php if($data[st_gender]=="female") echo "checked"; ?> />Female	</td>
    <th>Qualification *</th>
    <td>
	<div style="height:80; overflow:scroll" >
		<?php echo get_check_list("courses","course_id","course_name","st_qul[]",$data[st_qul]); ?>	</div>	</td>
</tr>
<tr>
  <th>Date of Birth </th>
  <td><input type="text" name="st_dob" id="st_dob" size="10" maxlength="10" readonly/ onblur="date"></td>
  <th>&nbsp;</th>
  <td>&nbsp;</td>
</tr>
<tr>
    <th>Course</th>
    <td>
		<select name="st_course" id="st_course">
    	<?php echo get_option_list("courses","course_id","course_name",$data[st_course]); ?>
		</select>	</td>
    <th>Photo</th>
    <td>
		<input name="st_photo" type="file" id="st_photo" />
		<?php
			if($data[st_photo])
			{
				echo  "<br>&nbsp;&nbsp;<img src='$SERVER_PATH/uploads/student_images/$data[st_photo]' height=60>&nbsp;&nbsp; Your Photo.";
			}
		?>
	</td>
</tr>
<tr>
    <th>Hobbies</th>
    <td>
		<textarea name="st_hobbies" id="st_hobbies"><?php echo $data['st_hobbies']; ?></textarea>	</td>
    <th>Mobile</th>
    <td>
		<input name="st_mobile" type="text" id="st_mobile" value="<?php echo $data['st_mobile']; ?>" />	</td>
</tr>
<tr>
    <td colspan="4">
	<div align="center">
	    <input type="submit" name="Submit" value="Submit" />
    	<input type="reset" name="Submit2" value="Reset" />
    </div>	</td>
</tr>
</table>
	<input type="hidden" name="st_photo" value="<?php echo $data['st_photo'] ?>" />
	<input type="hidden" name="act" value="save_student" />
	<input type="hidden" name="st_id" value="<?php echo $data['st_id'] ?>" />
</form>
<?php include_once("includes/footer.php"); ?>