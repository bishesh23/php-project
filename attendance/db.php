<?php
$conn=mysqli_connect('localhost','root','','guesthouse');
if($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}else {
    //echo "DB connected";}
}
