<?php
error_reporting (E_ALL ^ E_NOTICE);
//require_once 'main_header.php';

require_once "databaseConfig.php";
$err_db ="";
if(isset($_POST["add_dept"]))
{
	$rs = insertdept($_POST["Name"]);
	if($rs === true)
	{
		header("Location: AllDEPT.php");
	}
	$err_db = $rs;
}
elseif(isset($_POST["edit_dept"]))
{
	$rs = updatedept($_POST["Name"],$_POST["ID"]);
	if($rs === true)
	{
		header("Location: AllDEPT.php");
	}
	$err_db = $rs;
}

function insertdept($Name)
{
	$query = "insert into  department values ('$Name',NULL)";
	return execute($query);
}
function getalldept()
{
	$query = "select * from department";
	$rs = get($query);
	return $rs;
}
function getdept($ID)
{
	$query = "select * from department where ID = $ID";
	$rs = get($query);
	return $rs[0];
}
function updatedept($Name,$ID)
{
	$query = "update department set Name= '$Name' where ID = $ID";
	return execute($query);
}
?>