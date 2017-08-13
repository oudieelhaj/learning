<?php
include "conn.php";


if(isset($_POST["login"])) {

    //validation

    $username = $_POST['username'];
    if(empty($username)){
        die('sorry, username filed is required');
    }

    $password = $_POST['password'];
    if(empty($password)){
        die('sorry, password filed is required');
    }

    $sql = "SELECT username, pass FROM login where `username` = \"$username\" and `pass` = $password";
    $result = $conn->query($sql);

    if(!empty($result) && $result->num_rows > 0){
        var_dump($result->num_rows);die;
    }else{
        die('wrong username or password');
    }


    die('got the creds');


}else{
    header('location: login.php');
}