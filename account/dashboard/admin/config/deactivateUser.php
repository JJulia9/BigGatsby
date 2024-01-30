<?php
session_start(); 
include '../../../auth/dbConfig.php';



$uid = $_GET['uid'];
$stmt = $conn->prepare('UPDATE users usr
    set
    usr.active = 0
    where id = '.$uid.' ');

$stmt->execute();
header("Location: ../../a/allUsers");
