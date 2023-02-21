<?php
	
session_start();
$conn=mysql_connect('localhost','root','password');
mysql_select_db("php_ali",$conn);
$error;
if($_POST[submit]=="login")
{
	$enroll=$_REQUEST['loginid'];
	$password=$_REQUEST['password'];
	$query = "select * from student where enrollment = $enroll and password = $password and active = 1";
	$result=mysql_query($query);
	//$row=mysql_fetch_array($result);
	$match=mysql_num_rows($result);
	if($match>0)
	{
		$_SESSION['switch']="on";
		$_SESSION['enroll']=$enroll;
		header("location:student.php");
	}
	else
	{
		$_SESSION['switch']="off";
		$error="Your Login Id or Password May be wrong or you account may not be activated";
	}
}
?>
<html>
<head><title>Student Login</title></head>
<body>
<div style="position:absolute;top:30px;left:262px;width:500px;height:120px;background-color:#ffccff;">
<form action="stu_login.php" method="post">
<table align="center">
<tr>
<td>Enrollment No : </td><td><input type="text" name="loginid" /></td>
</tr>
<tr>
<td>Password : </td><td><input type="password" name="password" /></td>
</tr>
<tr>
<td align="center" colspan=2><input type="submit" name="submit" value="login" id="submit" /> <input type="reset" name="reset" value="reset" /></td>
</tr>
</table>
<font size="3" color="#ff0000"><?php
	print $error;
?></font>
</form>
</div>
</div>
<?php include_once("includes/footer.php"); ?>