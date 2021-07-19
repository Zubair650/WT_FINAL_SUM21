<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once "databaseConfig.php";

$err_db = "";
if(isset($_POST["add_std"]))
{
	echo "OK";
	$rs = insertStudent($_POST["id"],$_POST["name"],$_POST["dob"],$_POST["credit"],$_POST["cgpa"],$_POST["dept_id"]);
	if($rs === true)
	{
		header("Location: AllStudent.php");
	}
	$err_db = $rs;
}

function insertStudent($id,$name,$dob,$credit,$cgpa,$dept_id)
{
	$query = "insert into student values (NULL,'$name','$dob',$credit,'$cgpa',$dept_id)";
	return execute($query);
}

function getStudents()
{
	$query = "select p.*,c.name as 'dept_name' from student p left join department c on p.dept_id = dept_id";
	$rs = get($query);
	return $rs;
}

function getStudent($id)
{
	$query = "select * from student where ID=$id";
	$rs = get($query);
	return $rs[0];
}

function updateStudent($id,$name,$dob,$credit,$cgpa,$dept_id)
{
	$query = "update student set ID = $id, Name ='$name', DOB = $dob, Credit = $credit, CGPA = '$cgpa' where Dept_id = '$dept_id'";
	return execute($query);
}
?>