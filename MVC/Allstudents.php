<?php
require_once 'StudentsController.php';
$s1 = getStudents();
echo "<h1>All Students</h1>";
$i=1;

foreach($s1 as $c)
{
	$id = $c["id"];
	echo "<table border = '2'>";
	echo "<tr>";
	echo "<td>$i.</td>";
	//echo "<td><img width = '80px' height = '100px' src = '".$c["img"]."'</td>";
	echo "<td>".$c["Name"]."</td>";
	echo "<td>".$c["ID"]."</td>";
	echo "<td>".$c["DOB"]."</td>";
	echo "<td>".$c["Credit"]."</td>";
	echo "<td>".$c["CGPA"]."</td>";
	echo "<td>".$c["Dept_id"]."</td>";
	//echo '<td><a href= "editcat.php?id='.$id.'"> Edit </a></td>';
	echo "</tr>";
	echo "</table>";
	$i++;
	
}
?>
