<?php 
require_once 'StudentsController.php';

$ID = $_GET["ID"];
$c = getStudent($ID);
?>
<html>
<body>
<h1 align ="center">Welcome Admin
<form action="" method="post">
<p>Edit Student:</p>
<span><?php echo $err_db; ?></span>
<p><input type="hidden" name= "ID" value = "<?php echo $c["ID"]; ?>"> </p>
<p>Name: <input type="text" name= "Name" value = "<?php echo $c["Name"]; ?>"> </p>
<p>DOB: <input type="text" name= "DOB" value = "<?php echo $c["DOB"]; ?>"> </p>
<p>Credit: <input type="text" name= "Credit" value = "<?php echo $c["Credit"]; ?>"> </p>
<p>CGPA: <input type="text" name= "CGPA" value = "<?php echo $c["CGPA"]; ?>"> </p>
<p><input type="submit" name= "edit_std" value="Edit" > </p>
</body>
</html>