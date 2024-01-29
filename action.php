<?php
require_once 'db.php';
$obj= new Database();
$res = $obj->fetchData();

echo json_encode($res);
?>