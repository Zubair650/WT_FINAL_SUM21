<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'Controller/CategoryController.php';

?>

<html>
<body>
<h1 align ="center">Welcome Admin
<form action="" method="post">
<p>ADD Category:</p>
<p><input type="text" name = "name"> </p>
<span><?php echo $err_db; ?></span>
<p><input type="submit" name ="add_cat" value="Add" > </p>
</body>
</html>
