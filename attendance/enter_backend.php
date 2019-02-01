<?php

include_once 'db.php';
$name=$_POST['done'];
$date= $_POST['date'];
$status=$_POST['status'];


if (empty($date)){
    echo "<br>"; echo"Date Empty"; echo "<br>";
}
if (empty($status)){
    echo"Status is required"; echo "<br>";
}

elseif (!empty($date && $name && $status)) {

    $stmt = $conn->prepare(
        " insert into data ( name,date, status ) VALUES ( ? , ? , ?) "
    );

    $stmt->bind_param(
        "sss", $name, $date,$status);

    echo"<html>
<body bgcolor='f0fff0'><div class='bo'>
    <h1 style='color: green'> Your attendance is Filled <br><a href='logout.php'>Logout</a></h1> </div>
    </body>
    </html>";
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>