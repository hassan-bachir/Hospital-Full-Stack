<?php
include('connection.php');

$username = $_POST['username'];
$email = $_POST["email"];
$password = $_POST['password'];
$dob = $_POST['dob'];
$user_type = $_POST['userType'];

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
    $query = $mysqli->prepare('insert into users(id,name,email,password,dob,usertype_id) values(DEFAULT,?,?,?,?,?)');
    $query->bind_param('sssss', $username,$email, $hashed_password , $dob, $user_type );
    $query->execute();
    $response['status'] = "success";
}

echo json_encode($response);
