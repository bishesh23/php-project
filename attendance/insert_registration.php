<?php

include_once 'db.php';

$email= $_POST['email'];
$username= $_POST['username'];
$password=$_POST['password'];
$hashed_password = hash('sha256',$password);

if (empty($email)){
    echo "<br>"; echo"Email Empty"; echo "<br>";
}
if (empty($username)){
    echo"Username Empty"; echo "<br>";
}
if (empty($password)){
    echo"Password Empty"; echo "<br>";
}

elseif (!empty($email && $username && $password)) {

    $stmt = $conn->prepare(
        " insert into guesthouse ( email , username , password ) VALUES ( ? , ? , ? ) "
    );

    $stmt->bind_param(
        "sss", $email, $username, $hashed_password);

    echo"<html>
    You are registered <a href='login.php'>Login here</a>
    </html>";
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>