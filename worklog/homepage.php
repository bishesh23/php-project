<?php
$con=mysqli_connect('localhost','root','','register');
if($con->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}else {
    //echo "DB connected";}
}
?>

<html>
<head><title>Work Log</title><link href="home.css"rel="stylesheet"type="text/css">
<link href="bootstrap.min.css"rel="stylesheet"type="text/css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Work Log</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="registration_page.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
</nav>

<table class="table table-condensed">
    <thead>
    <tr>
        <th>Name</th>
        <th>Date</th>
        <th>Work</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
   <?php
   $result = mysqli_query($con,"SELECT * FROM data");
          while( $row = mysqli_fetch_assoc( $result ) ){
			echo
            "<tr>
              <td>{$row['Name']}</td>
              <td>{$row['date']}</td>
              <td>{$row['work']}</td>
              <td>{$row['status']}</td>		  
            </tr>\n";
}
   ?>
    </tbody>
</table>
</div>


</body>


</html>