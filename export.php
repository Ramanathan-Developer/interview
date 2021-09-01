<?php
include('connect.php');
if(isset($_POST['export'])){
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output","w");
    fputcsv($output, array('employee_id','firstname','lastname','date_of_birth','education_qualification',
    'emp_address','email','phone','emp_password','photo','emp_resume','created_at'));
    $query = "SELECT * FROM employee ORDER BY employee_id DESC";
    $result = mysqli_query($connect,$query);
    while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output,$row);
    }
    fclose($output);
}



?>