<?php
include "conn.php";


if(isset($_POST["submit"])) {

    //validation

    $username = $_POST['username'];
    if (empty($username)) {
        die('sorry, username filed is required');
    }
    $password = $_POST['password'];
    if (empty($password)) {
        die('sorry, password filed is required');
    }
    //echo "<script>alert('please enter the user name ');</script>";
    $sql = "INSERT INTO `stud` (`username`, `password`, `Email`, `Age`)
            VALUES (\"$username\", \"$password\", \"john@example.com\", \"333\")";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "<script>alert('done to add user');</script>";
        die;
    } else{
        die('wrong not yet ');
    }
    }