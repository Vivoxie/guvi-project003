<?php 
$con=new mysqli('localhost','root','','reg_login');

$password=$con->real_escape_string(trim($_POST['password']));
$email=$con->real_escape_string(trim(strtolower($_POST['email'])));


    $check=$con->query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='".$password."' ");

    if($check->num_rows>0){
        echo json_encode(['status'=>1, 'msg'=>'./home.php']);
    }else{
        
        echo json_encode(['status'=>0, 'msg'=>'Invalid Email or Password']);
    }
?>