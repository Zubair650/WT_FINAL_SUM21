<?php 
require_once 'Controller/DepartmentController.php';
$id = $_GET["id"];
$c = getDepartment($id);
?>
<html>
<body>
<h1 align ="center">Welcome Admin
<form action="" method="post">
<p>Edit Student:</p>
<span><?php echo $err_db; ?></span>
<p><input type="hidden" name= "id" value = "<?php echo $c["ID"]; ?>"> </p>
<p><input type="text" name= "name" value = "<?php echo $c["Name"]; ?>"> </p>
<p><input type="submit" name= "edit_cat" value="Edit" > </p>
</body>
</html>