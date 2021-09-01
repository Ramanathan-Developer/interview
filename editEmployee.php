<?php
$emp_id=$_GET['emp_id'];
include ("connect.php");
$sql = "SELECT * FROM employee WHERE employee_id='$emp_id'";
$results = $connect->query($sql);
$final = $results->fetch_assoc();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--JQuery CDN-->
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css">

    <title>Creative Bees</title>
</head>
<body>
    <h1 class="text-center">Employee Form </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <form class="row g-3" action="updateHandler.php" method="POST"autocomplete="off">
<div class="col-md-6">
    <label for="inputFirstName" class="form-label">First Name</label>
    <input type="text" class="form-control" name="inputFirstName" value="<?php echo $final['firstname'];?>" required>
</div>
<div class="col-md-6">
    <label for="inputLastName" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="inputLastName" value="<?php echo $final['lastname'];?>"required>
</div>
<div class="col-md-6">
    <label for="inputDob" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" name="inputDob" value="<?php echo $final['date_of_birth'];?>"required>
</div>
<div class="col-md-6">
    <label for="inputEduQualification" class="form-label">Education Qualification</label>
    <input type="text" class="form-control" name="inputEduQualification" value="<?php echo $final['education_qualification'];?>"required>
</div>
<div class="col-md-6">
    <label for="inputAddress" class="form-label">Address</label> 
    <input type="text" class="form-control" name="inputAddress" value="<?php echo $final['emp_address'];?>"required>
</div>
<div class="col-md-6">
    <label for="inputMail" class="form-label">Email</label>
    <input type="email" class="form-control" name="inputMail" value="<?php echo $final['email'];?>"required>
</div>
<div class="col-md-6">
    <label for="inputPhone" class="form-label">Phone</label>
    <input type="text" class="form-control" name="inputPhone" value="<?php echo $final['phone'];?>"required>
</div>
<div class="col-md-6">
    <label for="inputPwd" class="form-label">Password</label>
    <input type="password" class="form-control" name="inputPwd" value="<?php echo $final['emp_password'];?>"required>
    <input type='hidden' name='emp_id1' value="<?php echo $emp_id ;?>" >
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary ">Update Employee</button>
</div>
</div>


</form>
</div>
<div class="col-md-1"></div>
</div>
</div>
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>
