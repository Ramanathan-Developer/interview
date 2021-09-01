<?php
include('session.php');
$connect = new mysqli("localhost","root","","creative_bees");
if($connect -> connect_error){
    die("Connect Failed :" .$connect -> connect_error);
}
?>