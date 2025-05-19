<?php
 $valid_username = 'Darshan';
 $valid_password = 123456;
 if (isset($_POST['submit']))
 {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == $valid_username && $password == $valid_password)
    {
        setcookie('username', 'password', time() + 3600,'/');
        header('Location: dashboard.php');
        exit;
    }
    else
    {
        echo 'Invalid username or password';
    }
 }
 else
 {
    header('Location: Login.php');
    exit;
 }
?>