<?php
include('connection.php');

$username = $_POST['username'];
$email = $_POST["email"];
$password = $_POST['password'];
$dob = $_POST['dob'];
$user_type = $_POST['usertype'];

if ($user_type == 1) {
    $blood_type = $_POST['bloodType'];
    $ehr = $_POST['ehr'];
} elseif ($user_type == 2) {
    $ssn = $_POST['ssn'];
    $position = $_POST['position'];
}



$check_username = $mysqli->prepare('select name from users where name=?');
$check_username->bind_param('s', $username);
$check_username->execute();
$check_username->store_result();
$username_exists = $check_username->num_rows();

$hashed_password = password_hash($password, PASSWORD_BCRYPT);

if ($username_exists > 0) {
    $response['status'] = "failed";
} else {
    $query = $mysqli->prepare('insert into users(username,password,first_name,last_name,email) values(?,?,?,?,?)');
    $query->bind_param('sssss', $username, $hashed_password, $first_name, $last_name, $email);
    $query->execute();
    $response['status'] = "success";
}

echo json_encode($response);
