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

    
$sql = "UPDATE employees SET ";
foreach ($new_data as $field => $value) {
  $sql .= "$field='$value', ";
}
$sql = rtrim($sql, ", "); 
$sql .= " WHERE id=$user_id";

}
elseif ($user_type='patient'){
    if (isset($_REQUEST['blood_type'])) {
        $new_data['blood_type'] = $_REQUEST['blood_type'];
      }
    if (isset($_REQUEST['ehr'])) {
        $new_data['ehr'] = $_REQUEST['ehr'];
      }

      $sql = "UPDATE patients SET ";
foreach ($new_data as $field => $value) {
  $sql .= "$field='$value', ";
}
$sql = rtrim($sql, ", "); 
$sql .= " WHERE id=$user_id";

}

$sql = "UPDATE users SET ";
foreach ($new_data as $field => $value) {
  $sql .= "$field='$value', ";
}
$sql = rtrim($sql, ", "); 
$sql .= " WHERE id=$user_id";


if (mysqli_query($mysqli, $sql)) {
    echo "User data updated successfully";
  } else {
    echo "Error updating user data: " . mysqli_error($mysqli);
  }