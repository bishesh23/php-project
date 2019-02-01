<?php

include_once 'register_connect.php';
$name=$_POST['done'];
$date= $_POST['date'];
$work= $_POST['work'];
$status=$_POST['status'];


if (empty($date)){
    echo "<br>"; echo"Date Empty"; echo "<br>";
}
if (empty($work)){
    echo"Work Empty"; echo "<br>";
}
if (empty($status)){
    echo"Status is required"; echo "<br>";
}

elseif (!empty($date && $work && $status)) {

    $stmt = $conn->prepare(
        " insert into data ( name,date , work , status ) VALUES ( ? , ? , ?,?) "
    );

    $stmt->bind_param(
        "ssss", $name, $date, $work,$status);

    echo"<html>
<body bgcolor='f0fff0'><div class='bo'>
    <h1 style='color: green'> Your Work Log is Filled <br><a href='logout.php'>Logout</a></h1> </div>
    </body>
    </html>";
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>