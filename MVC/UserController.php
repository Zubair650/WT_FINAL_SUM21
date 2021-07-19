<?php
error_reporting (E_ALL ^ E_NOTICE);
//session_start();
require_once "databaseConfig.php";

$username = "";
$err_username = "";
$password = "";
$err_password = "";

$hasError = false;

$users = array("Zubair"=>"1234","Saad"=>"14785","Rayhan"=>"745896");
$admin = array("Rahim"=>"12345","Sakib"=>"34567","Sayema"=>"789");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["username"]))
	{
		$hasError = true;
		$err_username = "UserName required";
	}
	else
	{
		$username = $_POST["username"];
	}
	if(empty($_POST["password"]))
	{
		$hasError = true;
		$err_password = "Password required";
	}
	else
	{
		$password = $_POST["password"];
	}
	if(!$hasError)
	{
		foreach($users as $u=>$p)
		{
			if($username == $u && $password == $p)
			{
				//$_SESSION["loggeduser"] = $username;
				setcookie("loggeduser",$username,time()+120);
				//header("Location: Signup.php");
			}
		}
		foreach($admin as $a=>$q)
		{
			if($username == $a && $password == $q)
			{
				//$_SESSION["loggeduser"] = $username;
				setcookie("loggeduser",$username,time()+120);
				header("Location:Dashboard.php");
			}
		}
		echo "invalid username";
		
	}
}
		
?>