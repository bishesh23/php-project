<?php
$conn=mysqli_connect('localhost','root','','register');
if($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}else {
    //echo "DB connected";}
}