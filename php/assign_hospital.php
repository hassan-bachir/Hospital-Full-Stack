<?php 
session_start();
include('connection.php');
header('Allow-Control-Allow-Origin: *');
header('Allow-Control-Allow-Methods: POST,OPTIONS');


// $_SESSION['id'] = $id;
// $_SESSION['username']= $username1;
// $_SESSION['email'] = $email;
// $_SESSION['password']=$password;
// $_SESSION['dob']=$dob;
// $_SESSION['usertype_id']=$usertype_id;

if ($_SESSION['usertype_id']=='admin'){
   
    
}
