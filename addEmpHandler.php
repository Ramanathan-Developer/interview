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
$filepath = "images/" . $_FILES["files"]["name"];
$_FILES["files"]["tmp_name"];
if(move_uploaded_file($_FILES["files"]["tmp_name"], $filepath)){}
$filepath1 = "resume/" . $_FILES["file"]["name"];
$_FILES["file"]["tmp_name"];
if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath1)){}
$sql = "INSERT INTO employee (firstname,lastname,date_of_birth,education_qualification,emp_address,email,phone,emp_password,photo,emp_resume)
VALUE('$firstname','$lastname','$dob','$edu_qualification','$address','$email','$phone','$password','$filepath','$filepath1')";
$connect->query($sql);
header ('location: index.php');
?>