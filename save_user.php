<?php
$con=new mysqli('localhost','root','','reg_login');
if(isset($_POST)){
    $firstname=$con->real_escape_string(trim($_POST['firstname']));
    $lastname=$con->real_escape_string(trim($_POST['lastname']));
    $new_password=$con->real_escape_string(trim($_POST['new_password']));
    $email=$con->real_escape_string(trim(strtolower($_POST['email'])));

    $check=$con->query("SELECT * FROM `users` WHERE `email`='".$email."' ");

    if($check->num_rows>0){
        echo json_encode(['status'=>0, 'msg'=>'email already exists']);

    }else{
        $save=$con->query("INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL, '".$firstname."', '".$lastname."', '".$email."', '".$new_password."')");

        if($save){
            json_encode(['status'=>1, 'msg'=>'Congratulations,you have been successfully registered']);
        }else{
            json_encode(['status'=>0, 'msg'=>'Something went wrong']);
        }
    }
}

?>