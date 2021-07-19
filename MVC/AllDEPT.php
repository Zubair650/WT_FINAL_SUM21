<?php
require_once 'DepartmentController.php';
$d1 = getalldept();
echo "<h1>All Departments</h1>";
$i=1;
foreach($d1 as $c)
{
	$id = $c["id"];
	echo "<table>";
	echo "<tr>";
	echo "<td>$i. </td>";
	echo "<td>".$c["Name"]."</td>";
	echo '<td><a href= "editcat.php?id='.$id.'"> Edit </a></td>';
	echo "</tr>";
	echo "</table>";
	$i++;
}
?>
