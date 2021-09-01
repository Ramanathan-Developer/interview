<?php
$emp_id=$_GET['emp_id'];
include ("connect.php");
$sql = "DELETE  FROM employee WHERE employee_id='$emp_id'";
$connect->query($sql);
header ('location: index.php');

?>
