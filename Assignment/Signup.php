<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'main_header.php';
?>

<?php
require_once 'Controller/Temp.php';

?>

<html>
    <body> <fieldset>
	<h1>Sign Up</h1>
	<span><?php echo $err_db; ?></span>
	<form action="" method="post">
	<table>
	<tr>
	<td>Name</td>
	<td>: <input name="name" value = "<?php echo $name;?>" type="text" placeholder="Enter your name..." >
	
	<span><?php echo $err_name; ?></span></td>
	</tr> 
	<tr>
	<td>UserName</td>
	<td>: <input name="username" value = "<?php echo $username;?>" type="text" placeholder="Enter your username...">
	<span><?php echo $err_username; ?></span></td>
	</tr>
	<tr>
	<td>Email</td>
	<td>: <input name="email" value = "<?php echo $email;?>" type="text" placeholder="Enter Email...">
	<span><?php echo $err_email; ?></span></td>
	</tr>
	<tr>
	<td>Password</td>
	<td>: <input name="password" value = "<?php echo $password;?>" type="password" placeholder="Enter Password...">
	<span><?php echo $err_password; ?></span></td>
	</tr>
	
	
	<tr><td></td>
	<td> <input type="submit" name ="register" value="register" > </td> </tr>
	
	</table>
	</form>
	
	</body>
</html>
		