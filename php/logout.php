<?php 
session_start();
include('connection.php');
header('Allow-Control-Allow-Origin: *');
// header('Allow-Control-Allow-Methods: GET, POST,OPTIONS');

$_SESSION['id'] = $id;
$_SESSION['username']= $username1;
$_SESSION['email'] = $email;
$_SESSION['password']=$password;
$_SESSION['dob']=$dob;
$_SESSION['usertype_id']=$usertype_id;

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['dob']);
unset($_SESSION['usertype_id']);

session_destroy();

$response['status'] = "logged out";
echo json_encode($response);