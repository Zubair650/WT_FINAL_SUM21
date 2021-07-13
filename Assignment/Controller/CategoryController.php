<?php
error_reporting (E_ALL ^ E_NOTICE);
include 'main_header.php';
?>

<?php
include 'Models/db_config.php';
$err_db ="";
if(isset($_POST["add_cat"]))
{
	$rs = insertcategory($_POST["name"]);
	if($rs === true)
	{
		header("Location: AllCat.php");
	}
	$err_db = $rs;
}
elseif(isset($_POST["edit_cat"]))
{
	$rs = updatecategory($_POST["name"],$_POST["id"]);
	if($rs === true)
	{
		header("Location: AllCat.php");
	}
	$err_db = $rs;
}

function insertcategory($name)
{
	$query = "insert into  cat values (NULL,'$name')";
	return execute($query);
}
function getallcategory()
{
	$query = "select * from cat";
	$rs = get($query);
	return $rs;
}
function getcategory($id)
{
	$query = "select * from cat where id = $id";
	$rs = get($query);
	return $rs[0];
}
function updatecategory($name,$id)
{
	$query = "update cat set name= '$name' where id = $id";
	return execute($query);
}
?>