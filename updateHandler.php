<?php 
include ("connect.php");
$firstname = $_POST['inputFirstName'];
$lastname = $_POST['inputLastName'];
$dob = $_POST['inputDob'];
$edu_qualification = $_POST['inputEduQualification'];
$address = $_POST['inputAddress'];
$email = $_POST['inputMail'];
$phone = $_POST['inputPhone'];
$password = $_POST['inputPwd'];
$emp_id = $_POST['emp_id1'];
$sql = "UPDATE employee set firstname = '$firstname',lastname='$lastname',date_of_birth='$dob',education_qualification='$edu_qualification',
emp_address='$address',email='$email',phone='$phone',emp_password = '$password' WHERE employee_id = '$emp_id'";
$connect->query($sql);
header ('location: index.php');

?>