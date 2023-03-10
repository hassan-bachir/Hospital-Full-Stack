<?php
include('connection.php');

$username = $_POST['username'];
$email = $_POST["email"];
$password = $_POST['password'];
$dob = $_POST['dob'];
$user_type = $_POST['userType'];

if ($user_type == 'patient') {
    $blood_type = $_POST['bloodType'];
    $ehr = $_POST['ehr'];


} elseif ($user_type == 'employee') {
    $ssn = $_POST['ssn'];
    $position = $_POST['position'];
}



$check_username = $mysqli->prepare('select username from users where username=?');
$check_username->bind_param('s', $username);
$check_username->execute();
$check_username->store_result();
$username_exists = $check_username->num_rows();

$hashed_password = password_hash($password, PASSWORD_BCRYPT);

if ($username_exists > 0) {
    $response['status'] = "failed";
} else {
    $query = $mysqli->prepare('insert into users(id,username,email,password,dob,user_type) values(DEFAULT,?,?,?,?,?)');
    $query->bind_param('sssss', $username,$email, $hashed_password , $dob, $user_type );
    $query->execute();
    
    //we need this id for the patient or employee 
    $user_id = $mysqli->insert_id;
    
if ($user_type == 'patient') {
    $blood_type = $_POST['bloodType'];
    $ehr = $_POST['ehr'];

    $query2 =$mysqli->prepare('insert into patients(id,blood_type,ehr) values(?,?,?)');
    $query2->bind_param('iss',$user_id,$blood_type,$ehr);
    $query2->execute();


} elseif ($user_type == 'employee') {
    $ssn = $_POST['ssn'];
    $position = $_POST['position'];
    $date = date('d-m-Y');
    $query3 =$mysqli->prepare('insert into employees(id,ssn,date_joined,position) values(?,?,?,?)');
    $query3->bind_param('isss',$user_id,$ssn,$date,$position);
    $query3->execute();
}




    $response['status'] = "success";
}

echo json_encode($response);
