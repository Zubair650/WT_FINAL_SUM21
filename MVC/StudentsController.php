<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once "databaseConfig.php";
$Name = "";
$err_name = "";
$err_db = "";
$hasError = false;
if(isset($_POST["add_std"]))
{
	echo "OK";
	$rs = insertStudent($_POST["Name"],$_POST["DOB"],$_POST["Credit"],$_POST["CGPA"],$_POST["Dept_id"]);
	if($rs === true)
	{
		header("Location: AllStudents.php");
	}
	$err_db = $rs;
}

elseif(isset($_POST["edit_std"]))
{
	if(empty($_POST["Name"]))
	{
		$hasError = true;
		$err_name = "Name required";
	}
	$rs = updateStudent($_POST["Name"],$_POST["DOB"],$_POST["Credit"],$_POST["CGPA"]);
	if($rs === true)
	{
	echo "OK";
	if(strlen($_POST["Name"])<= 2)
	{
		$hasError = true;
		$err_name = "Name must be greater than 2 characters";
	}
	else
	{
	header("Location: Edit_student.php");
	}
		
	}
	$err_db = $rs;
}

function insertStudent($Name,$DOB,$Credit,$CGPA,$Dept_id)
{
	$query = "insert into student values ('$Name',NULL,'$DOB',$Credit,'$CGPA',$Dept_id)";
	return execute($query);
}

function getStudents()
{
	$query = "select p.*,c.Name as 'Dept_name' from student p left join department c on p.Dept_id = c.ID";
	$rs = get($query);
	return $rs;
}

function getStudent($ID)
{
	$query = "select * from student where ID=$ID";
	$rs = get($query);
	return $rs[0];
}

function updateStudent($Name,$DOB,$Credit,$CGPA)
{
	$query = "update student set Name ='$Name',DOB = '$DOB', Credit = $Credit, CGPA = '$CGPA' where ID = $ID";
	return execute($query);
}
?>