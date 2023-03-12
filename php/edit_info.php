<?php
session_start();
include('connection.php');

$id =   $_SESSION['id'];
$user_type = $_SESSION['user_type'];
$new_data = array();
if (isset($_REQUEST['username'])) {
  $new_data['username'] = $_REQUEST['username'];
}
if (isset($_REQUEST['email'])) {
  $new_data['email'] = $_REQUEST['email'];
}
if (isset($_REQUEST['password'])) {
  $new_data['password'] = $_REQUEST['password'];
}




$user_id = $_REQUEST['user_id'];
$new_data = array();
if (isset($_REQUEST['username'])) {
  $new_data['username'] = $_REQUEST['username'];
}
if (isset($_REQUEST['email'])) {
  $new_data['email'] = $_REQUEST['email'];
}
if (isset($_REQUEST['password'])) {
  $new_data['password'] = $_REQUEST['password'];
}

if($user_type=='employee'){
    if (isset($_REQUEST['ssn'])) {
        $new_data['ssn'] = $_REQUEST['ssn'];
      }
    if (isset($_REQUEST['position'])) {
        $new_data['position'] = $_REQUEST['position'];
      }

    

}
elseif ($user_type='patient'){
    if (isset($_REQUEST['blood_type'])) {
        $new_data['blood_type'] = $_REQUEST['blood_type'];
      }
    if (isset($_REQUEST['ehr'])) {
        $new_data['ehr'] = $_REQUEST['ehr'];
      }


}