<?php 
	include_once("includes/header.php");
	$condition=1;
	if(isset($_REQUEST['search_text']))
	{
		$st=$_REQUEST['search_text'];
		$condition.=" AND ( st_name LIKE '%$st%'";
		$condition.=" OR st_father LIKE '%$st%'";
		$condition.=" OR st_add1 LIKE '%$st%'";
		$condition.=" OR st_mobile LIKE '%$st%'";
		$condition.=" OR st_nationality LIKE '%$st%' )";

	}
	
	// $SQL="SELECT * FROM student WHERE $condition ORDER BY st_id";	
	// $rs=mysqli_query($SQL, $db_sel) or die(mysqli_error());
  // print_r($rs);

  $qry = "SELECT * FROM student WHERE $condition ORDER BY st_id";
    $rs = $db_sel->query($qry);
    
    
    
    // $insertdata = "UPDATE customer set customer_type = '$package_name' where mbrno='$mbrno'";
    // $result_insertdata = $conn->query($insertdata);
    // $qry = "SELECT * FROM customer where mbrno='$mbrno' and status='Active'";
    // $result_customer = $conn->query($qry);
    // if ($result_customer->num_rows > 0) {
    //     $row_customer = $result_customer->fetch_assoc();
    //     $customer_user=$row_customer['user'];
    // }
?>
<?php 
if(isset($_REQUEST['msg'])){?>
<div align="center"><?php echo $_REQUEST['msg']?></div>
<?php }?>


<form name="search_text" action="#">
<table width="90%" border="0" align="center">
  <tr>
    <th align="left" scope="col">Search Text : 
      <input type="text" name="search_text" />
      <input name="search" type="submit" id="search" value="Search" />
	</th>
  </tr>
</table>
</form>

<form name="student_view" action="lib/student.php" method="post">
<table width="90%" border="2" align="center"> 
  <tr>
    <th colspan="8" hrf><div align="right"><a href="student_add.php">Student Add</a> &nbsp;| <a href="Javascript:delete_multiple_student(<?php echo $data['st_id']; ?>)">Delete</a> </div></th>
  </tr>
  <tr>
    <th><input name="chk_all" type="checkbox" id="chk_all" onclick="check_all(this)" />
      Delete</th>
    <th>ID. No.</th>
    <th>Name</th>
    <th>Father Name</th>
    <th>Mobile</th>
	<th>Photo</th>
    <th>Action</th>
  </tr>
  <?php
  
  while($data = $rs->fetch_assoc()){
  
  ?>
  <tr>
    <td align="center"><input name="st_id_multiple[]" type="checkbox" value="<?php echo $data['st_id'] ?>" /></td>
    <td align="center"><?php echo $data['st_id']; ?></td>
    <td><?php echo $data['st_name']; ?></td>
    <td><?php echo $data['st_father']; ?></td>
    <td><?php echo $data['st_mobile']; ?></td>
    <td><?php
			if($data['st_photo'])
			{
				echo  "<center><img src='$SERVER_PATH/uploads/student_images/$data[st_photo]' height=60></center>";
				echo $data['st_photo'];
			}
		?>
	</td>
    <td><a href="student_add.php?st_id=<?php echo $data['st_id']; ?>">Edit</a> | <a href="Javascript:delete_student(<?php echo $data['st_id']; ?>)">Delete</a></td>
  </tr>
  <?php } ?>
</table>
<input type="hidden" name="act" />
<input type="hidden" name="st_id" />
</form>
<?php include_once("includes/footer.php"); ?>