<?php
include_once("../includes/db_connect.php");
if($_REQUEST['act'])
{
	$_REQUEST['act']();
}
####Function for saving the record of student #####
function save_student()
{
	$R=$_REQUEST;
	$R[st_qul]=implode(",",$R[st_qul]);	
	$image_name  = $_FILES[st_photo][name];
	if($image_name)
	{
		$location  = $_FILES[st_photo][tmp_name];
		$image_arr=explode(".",$image_name);
		$image_name = $image_arr[0]."_".time().".".$image_arr[1];	
		move_uploaded_file($location,"../uploads/student_images/$image_name");
	}
	else
	{
		$image_name=$R[st_photo];
	}
	if($R[st_id])
	{
		$SQL="
				UPDATE `student` SET  
				`st_name` =  '$R[st_name]',
				`st_father` =  '$R[st_father]',
				`st_add1` =  '$R[st_add1]',
				`st_add2` =  '$R[st_add2]',
				`st_city` =  '$R[st_city]',
				`st_state` =  '$R[st_state]',
				`st_country` =  '$R[st_country]',
				`st_nationality` =  '$R[st_nationality]',
				`st_gender` =  '$R[st_gender]',
				`st_qul` =  '$R[st_qul]',
				`st_course` =  '$R[st_course]',
				`st_photo` =  '$image_name',
				`st_hobbies` =  '$R[st_hobbies]',
				`st_mobile` =  '$R[st_mobile]' 
				WHERE `st_id` ='$R[st_id]';
			";
		$msg="Student Updated Successfully.";
	}
	else
	{
			$SQL="
			INSERT INTO `student` (`st_name` ,`st_father` ,`st_add1` ,`st_add2` ,`st_city` ,`st_state` ,`st_country` ,`st_nationality` ,`st_gender` ,`st_qul` ,`st_course` ,`st_photo` ,`st_hobbies` ,`st_mobile`
)VALUES ('$R[st_name]',  '$R[st_father]',  '$R[st_add1]',  '$R[st_add2]',  '$R[st_city]',  '$R[st_state]',  '$R[st_country]',  '$R[st_nationality]',  '$R[st_gender]',  '$R[st_qul]',  '$R[st_course]',  '$image_name',  '$R[st_hobbies]',  '$R[st_mobile]');
			";
		$msg="Student Saved Successfully...";
	}
	$rs=mysql_query($SQL) or die(mysql_error());
		
	if($rs)
	{
		header("Location:../student_view.php?msg=$msg");
	}
}
####Function for deleting the record of student #####
function delete_student()
{
	/////Delete the Image if  exist//////////
	$SQL="SELECT * FROM student where st_id='$_REQUEST[st_id]'";
	$rs=mysql_query($SQL) or die(mysql_error());
	$data=mysql_fetch_assoc($rs);
	if($data[st_photo])
	{
		unlink("../uploads/student_images/".$data[st_photo]);			
	}	
	/////Delete the Recored from database////
	$SQL="DELETE FROM student WHERE st_id=$_REQUEST[st_id]";
	$rs=mysql_query($SQL) or die(mysql_error());
	if($rs)
	{
		header("Location:../student_view.php?msg=Student Deleted Succsessfully.");
	}
}

####Function for deleting multiple student########
function delete_multiple_student()
{		
	$R=$_REQUEST;
	$st_id_array=$R[st_id_multiple];
	foreach($st_id_array as $st_id)
	{
		/////Delete the Image if  exist//////////
		$SQL="SELECT * FROM student where st_id='$st_id'";
		$rs=mysql_query($SQL) or die(mysql_error());
		$data=mysql_fetch_assoc($rs);
		if($data[st_photo])
		{
			unlink("../uploads/student_images/".$data[st_photo]);			
		}		
		/////Delete the Recored from database////
		$SQL="DELETE FROM student WHERE st_id=$st_id";
		$rs=mysql_query($SQL) or die(mysql_error());
	}
	header("Location:../student_view.php?msg=Selected Student are Delete Succsessfully.");	 
}
?>