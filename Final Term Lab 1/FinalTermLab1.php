<?php
session_start();
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
			if($username == $u && $password == $p)
			{
				//$_SESSION["loggeduser"] = $username;
				setcookie("loggeduser",$username,time()+120);
				header("Location: Dashboard.php");
			}
		}
		echo "invalid username";
		
	}
}
		
?>

<html>
<body>
<form action="" method="post">
<table>
<tr>
	<td>UserName</td>
	<td>: <input name="username" value = "<?php echo $username;?>" type="text">
	<span><?php echo $err_username; ?></span></td>
	</tr>
	<tr>
	<td>Password</td>
	<td>: <input name="password" value = "<?php echo $password;?>" type="password">
	<span><?php echo $err_password; ?></span></td>
	</tr><tr><td></td>
	<td> <input type="submit" value="submit" > </td> </tr>
</table>
</form>
</body>

</html>
