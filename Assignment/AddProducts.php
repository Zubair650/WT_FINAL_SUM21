<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Controller/ProductsController.php';
require_once 'Controller/CategoryController.php';
$cat = getallcategory();
?>

<html>
<body>
<h1 align ="center">Welcome Admin
<form action="" method="post" enctype= "multipart/form-data">
<p>ADD Products:</p>
<span><?php echo $err_db; ?></span>
<p>Name:<input type="text" name = "name" onfocusout="checkProductname(this)"><span id="err_uname"></span> </p>
<p>Price:<input type="text" name = "price"> </p>
<p>Category:</p>
<select name="c_id">
<option disabled selected>Choose</option>
<?php
foreach($cat as $c)
{
	echo "<option value='".$c["id"]."'>".$c["name"]."</option>";
}
?>
</select>
<p>Quantity:<input type="text" name = "qty"> </p>
<p>Description:<input type="text" name = "desc"> </p>
<p>Image:<input type="file" name="p_image"> </p>
<span><?php //echo $err_db; ?></span>
<p><input type="submit" name ="add_pro" value="Add" > </p>
<script src ="checkProductname.js"></script>
</body>
</html>
