<?php
include 'db.php';
?>

<html>
<head><title>Attendance Log</title><link href="output.css"rel="stylesheet"type="text/css">
    <link href="bootstrap.min.css"rel="stylesheet"type="text/css">
</head>
<body>
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Attendance Sheet</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
</nav>

<table class="table table-condensed">
    <thead>
    <tr>
        <th>Name</th>
        <th>Date</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $result = mysqli_query($conn,"SELECT * FROM data");
    while( $row = mysqli_fetch_assoc( $result ) ){
        echo
        "<tr>
              <td>{$row['name']}</td>
              <td>{$row['date']}</td>
              <td>{$row['status']}</td>		  
            </tr>\n";
    }
    ?>
    </tbody>
</table>
</div>


</body>


</html>