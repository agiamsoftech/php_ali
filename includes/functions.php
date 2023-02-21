<?php
	###Function for generating the dynamic option list####
function get_option_list($table,$col_id,$col_value,$sel=0)
{
	$SQL="SELECT * FROM $table ORDER BY $col_value";
	$rs=mysql_query($SQL) or die (mysql_error());
	$option_list="<option value=0>Please Select</option>";
	while($data=mysql_fetch_assoc($rs))
	{
		if($data[$col_id]==$sel)
		{
			$option_list.="<option value='$data[$col_id]' selected>$data[$col_value]</option>";
		}
		else
		{
			$option_list.="<option value='$data[$col_id]'>$data[$col_value]</option>";
		}
	}
	return $option_list;
}	
###Function for generating the dynamic checkbox####
function get_check_list($table,$col_id,$col_value,$name,$sel=0)
{
	$SQL="SELECT * FROM $table ORDER BY $col_value";
	$rs=mysql_query($SQL) or die (mysql_error());
	$option_list="";
	$sel=explode(",",$sel);
	while($data=mysql_fetch_assoc($rs))
	{
		if(in_array($data[$col_id],$sel))
		{
	echo		$option_list.="<input type='checkbox' name='$name' value='$data[$col_id]' checked>$data[$col_value]<br>";
		}
		else
		{
			$option_list.="<input type='checkbox' name='$name' value='$data[$col_id]'>$data[$col_value]<br>";
		}
	}
	return $option_list;
}
######Function for fetch Multiple Value############
function fetch($table, $cond="", $order="", $ord_type="ASC", $limit="")
{
	$sql = "SELECT * FROM ".$table;
	if($cond <> "")
	$sql .= " WHERE ".$cond;
	if($order <> "")
	$sql .= " ORDER BY ".$order." ".$ord_type;
	if($limit <> "")
	$sql .= " LIMIT ".$limit;
	//echo $sql;
	$res = $this->conn->query($sql);
		
	if($res->num_rows > 0)
	{
		unset($resarr);
		while($arr = $res->fetch_assoc())
		$resarr[] = $arr;
			
		return $resarr;
	}
	else
	return false;
}
?>	