<?php
error_reporting (E_ALL ^ E_NOTICE);
require_once 'StudentsController.php';
require_once 'DepartmentController.php';
$std = getalldept();
?>

<html>
<body>
<h1 align ="center">Welcome Admin
<form action="" method="post" enctype= "multipart/form-data">
<p>ADD Students:</p>
<span><?php echo $err_db; ?></span>
<p>Name:<input type="text" name = "Name"> </p>
<p>Date of Birth:<input type="text" name = "DOB"> </p>
<p>Credit:<input type="text" name = "Credit"> </p>
<p>CGPA:<input type="text" name = "CGPA"> </p>
<p>Department:</p>
<select name="Dept_id">
<option disabled selected>Choose</option>
<?php
foreach($std as $c)
{
	echo "<option value='".$c["ID"]."'>".$c["Name"]."</option>";
}
?>
</select>
<p><input type="submit" name ="add_std" value="Add" > </p>
</body>
</html>
