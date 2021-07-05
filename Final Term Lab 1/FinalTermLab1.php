<?php
$username = "";
$err_username = "";
$password = "";
$err_password = "";

$hasError = false;

$users = array("Zubair"=>"1234","Saad"=>"14785","Rayhan"=>"745896");

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
			if($users == $u && $password == $p)
			{
				setcookie("loggeduser",$username,time()+120);
				header("Location: Dashboard.php");
			}
		}
		echo "invalid username";
		
	}
}
		
?>