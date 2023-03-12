<?php 
session_start();
include('connection.php');
header('Allow-Control-Allow-Origin: *');
header('Allow-Control-Allow-Methods: POST,OPTIONS');

if ($_SESSION['usertype_id']=='admin'){
   
    
}
