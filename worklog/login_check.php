<?php
include 'register_connect.php';
session_start();
if(isset($_POST['button']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $hashed_password = hash('sha256',$password);
    $query = "SELECT * FROM register where username='". $username ."' and password='". $hashed_password ."'";
    $res = mysqli_query($conn,$query);
    $count=mysqli_num_rows($res);
    if ($count==1){
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        $_SESSION['success']=true;
        echo "<script type=\"text/javascript\">" .
            "alert('Successfully Logged In');
                window.location.href='indexo.php';" .
            "</script>";


}else{
     echo "<script type=\"text/javascript\">" .
        "alert('Incorrect username or password! Please try again');
               window.location.href='login.php';" .
           "</script>";
}}