<?php
require 'database_con.php';
session_start();
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $query = "SELECT * FROM pupils_table WHERE email = '$email'";

    $connection=$database_con->query($query);
    if($connection->num_rows>0){
        $user= $connection->fetch_assoc();
        $_SESSION['message']='Email already exist';
        header('location:signup.php');
    }


else{

    $hashpassword = password_hash($password, PASSWORD_DEFAULT);

    $runquery = "INSERT INTO `pupils_table`(`first_name`, `last_name`, `age`, `email`, `address`, `password`) VALUES ('$firstname', '$lastname', '$age', '$email', '$address', '$hashpassword')";
    $querycon = $database_con->query($runquery);

    if ($querycon) {
        header('location:signin.php');
    } else {
        echo 'Registration Failed: ' . $database_con->error;
        // $_SESSION['message']='There is an error';
        // header('location:signup.php');
    }
}
}
?>
