<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'DepartmentController.php';
//require_once 'Controller/CategoryController.php';
$dept = getalldept();
?>

<html>
<body>
<h1 align ="center">Welcome Admin
<form action="" method="post" enctype= "multipart/form-data">
<p>ADD Departements:</p>
<span><?php echo $err_db; ?></span>
<p>Name:<input type="text" name = "name"> </p>
<p>ID:<input type="text" name = "id"> </p>

<p><input type="submit" name ="add_dept" value="Add" > </p>
</body>
</html>
