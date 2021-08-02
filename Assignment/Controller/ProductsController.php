<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once "Models/db_config.php";

$err_db = "";
if(isset($_POST["add_pro"]))
{
	
	$filetype = strtolower(pathinfo(basename($_FILES["p_image"]["name"]),PATHINFO_EXTENSION));
	$target = "storage/product_images/".uniqid().".$filetype";
	move_uploaded_file($_FILES["p_image"]["tmp_name"],$target);
	
	
	
	
	$rs = inseertProduct($_POST["name"],$_POST["c_id"],$_POST["price"],$_POST["qty"],$_POST["desc"],$target);
	if($rs === true)
	{
		header("Location: AllProducts.php");
	}
	$err_db = $rs;
}

function inseertProduct($name,$c_id,$price,$qty,$desc,$img)
{
	
	$query = "insert into products1 values (NULL,'$name',$c_id,$price,$qty,'$desc','$img')";
	//echo "$query";
	return execute($query);
}

function getProducts()
{
	$query = "SELECT p.*,c.name as 'c_name' from products1 p left join cat c on p.c_id = c_id";
	$rs = get($query);
	return $rs;
}

function getProduct($id)
{
	$query = "select * from products1 where id=$id";
	$rs = get($query);
	return $rs[0];
}

function updateProduct($name,$c_id,$price,$qty,$desc,$img)
{
	$query = "update products1 set name ='$name',c_id = $c_id, price = $price,qty = $qty, description = '$desc',img = '$img' where id = $id";
	return execute($query);
}

function checkUsername ($uname) {
$query = "select name from users where username='$uname'";
$rs = get ($query) ;
if(count($rs) > 0) 
{
return true;
}
return false;
}
?>