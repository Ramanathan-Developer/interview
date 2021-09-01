<?php
include('connect.php');
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
    
    <title>Interview Task</title>
  </head>
  <body>
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-md-2"><a href="addEmployee.php" class="btn btn-sm btn-success">Add Employee</a></div>
        <div class="col-md-2">
            <form method="POST" action="export.php">
                <input type="submit" name="export" value="Download Table" class="btn btn-sm btn-secondary">
            </form>
        </div>
        <div class="col-md-4"><h1 class="text-center">Interview Task</h1></div>
        <div class="col-md-4"><img class="float-end" id="profile" src="images/images.png" alt="Employee Image" height=120px width=120px></div>
      </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <table id="datatable" class='table'>
                        <thead class="table-active">
                          <th>Emp_ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th style="width: 9%">DOB</th>
                          <th>Qualification</th>
                          <th>Address</th>
                          <th>Email</th>
                          <th>PhoneNo</th>
                          <th>Photo</th>
                          <th style="width: 10%">Action Need</th>
                        </thead>
                        <tbody>
                            <?php 
                            $sql = "SELECT * FROM employee";
                            $results = $connect->query($sql);
                            while($final=$results->fetch_assoc()){?>
                          <tr>
                            <td><?php echo $final['employee_id'];?></td>
                            <td><?php echo $final['firstname'];?></td>
                            <td><?php echo $final['lastname'];?></td>
                            <td><?php echo $final['date_of_birth'];?></td>
                            <td><?php echo $final['education_qualification'];?></td>
                            <td><?php echo $final['emp_address'];?></td>
                            <td><?php echo $final['email'];?></td>
                            <td><?php echo $final['phone'];?></td>
                            <td><button class="btn btn-sm btn-info"onclick="document.getElementById('profile').src='<?php echo $final['photo']?>'">View</button></td>
                            
                            <td><a class="btn btn-sm btn-warning w-1" href="editEmployee.php?emp_id=<?php echo $final['employee_id']?>">Edit</a>
                            <a class="btn btn-sm btn-danger" href="delete.php?emp_id=<?php echo $final['employee_id']?>">Delete</a>
                            </td>
                          </tr>
                            <?php } ?>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <a href="destroy_Sesisson.php" class="btn btn-sm btn-danger">Clear Session</a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    $('#datatable').DataTable();
} );
  </script>
    
  </body>
</html>
