<?php
/*session_start();
if(!isset($_SESSION["loggeduser"]))
{
	header("Location: FinalTermLab1.php");
}*/
if(!isset($_COOKIE["loggeduser"]))
{
	header("Location: FinalTermLab1.php");
}
?>

<html>
<body>
<table>
<form action ="" method="post">
<h1 align ="center">Welcome 
<?php 
//echo $_SESSION["loggeduser"];
echo $_COOKIE["loggeduser"];
?>
<tr>
	<td>Product name</td>
	<td><input type="text"></td>
	</tr> 
	<tr>
	<td>Product ID</td>
	<td><input type="text"></td>
	</tr> 
	<td>Product Quantity</td>
	<td><input type="text"></td>
	</tr> 
	<td>Product Price</td>
	<td><input type="text"></td>
	</tr><tr><td></td>
	<td> <input type="submit" value="Add" > </td> </tr>
</table>

</body>

</html>