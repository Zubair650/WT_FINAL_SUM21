<?php
error_reporting (E_ALL ^ E_NOTICE);
//require_once 'main_header.php';

require_once "databaseConfig.php";
$err_db ="";
if(isset($_POST["add_dept"]))
{
	$rs = insertdept($_POST["name"]);
	if($rs === true)
	{
		header("Location: AllDEPT.php");
	}
	$err_db = $rs;
}
elseif(isset($_POST["edit_dept"]))
{
	$rs = updatedept($_POST["name"],$_POST["id"]);
	if($rs === true)
	{
		header("Location: AllDEPT.php");
	}
	$err_db = $rs;
}

function insertdept($name)
{
	$query = "insert into  department values ('$name',NULL)";
	return execute($query);
}
function getalldept()
{
	$query = "select * from department";
	$rs = get($query);
	return $rs;
}
function getdept($id)
{
	$query = "select * from department where ID = $id";
	$rs = get($query);
	return $rs[0];
}
function updatedept($name,$id)
{
	$query = "update department set Name= '$name' where ID = $id";
	return execute($query);
}
?>