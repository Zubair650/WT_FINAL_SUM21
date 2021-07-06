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
<h1 align ="center">Welcome 
<?php 
//echo $_SESSION["loggeduser"];
echo $_COOKIE["loggeduser"];
?>
</h1>
<a href ="AddProduct.php"> Add Product</a>
<a href =""> All Product</a>
<a href =""> All Users</a>
<a href =""> All Categories</a>
</body>
</html>