<?php
 require_once '../db.php';
 $obj= new Database();

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    print_r($_POST);
     $obj->insertData($fullname, $email, $phone);
?>