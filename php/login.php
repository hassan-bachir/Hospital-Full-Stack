<?php 
session_start();
include('connection.php');



$username = $_POST['username'];
$password = $_POST['password'];


$query = $mysqli->prepare('select id,username,email,password,dob,usertype_id from users where username = ?');
$query->bind_param('s', $username);
$query->execute();

$query->store_result();
$num_rows = $query->num_rows();


$query->bind_result($id, $username1,$email,$hashed_password, $dob, $usertype_id);
$query->fetch();
$response = [];

if ($num_rows == 0) {
    $response['response'] = "user not found";
    
} else {
    
    if (password_verify($password, $hashed_password)) {
        $response['response'] = "logged in";
        $_SESSION['id'] = $id;
        $_SESSION['username']= $username1;
        $_SESSION['email'] = $email;
        $_SESSION['password']=$password;
        $_SESSION['dob']=$dob;
        $_SESSION['usertype_id']=$usertype_id;



       
    } else {
        $response["response"] = "Incorrect password";
    }
}

echo json_encode($response);
