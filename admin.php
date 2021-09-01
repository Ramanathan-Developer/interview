<?php
session_start();
if(isset($_POST['login'])){
    include ('connect.php');
    $name = $_POST['adminname'];
    $password = $_POST['password'];
    $sql="SELECT * FROM admin WHERE username='$name' AND password='$password'";
    $results=$connect->query($sql);
    $final=$results->fetch_assoc();
    $_SESSION['name'] = $final['username'];
    $_SESSION['id'] = $final['admin_id'];

    if($email=$final['username'] AND $password=$final['admin_id']){
        header('location: index.php');
    }else{
        header('location: admin.php');
    }
}
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
    
    <title>Admin</title>
  </head>
  <body>
        <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
        <div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">Admin Login</h3>
        </div>
        <form class="form-horizontal" action="admin.php" method="POST" autocomplete='off'>
        <div class="box-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Admin</label>

            <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="adminname">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

            <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            
            </div>
        </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        <button type="submit" class="btn btn-primary btn-md mt-5 pull-right" name="login">Log in</button>
        </div>
        </div>
        <div class="col-sm-4">

        </div>


        </div>
        <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
        <script type="text/javascript">
</body>
</html>