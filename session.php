<?php
session_start();
if(empty($_SESSION['name'] AND $_SESSION['id'])){
    header('location: admin.php');
}
?>