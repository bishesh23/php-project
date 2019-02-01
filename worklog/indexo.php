<?php
session_start();
if ($_SESSION['success']==true) {
    echo '
<html>
<head><title>Fill the Sheet</title><link href="index.css"rel="stylesheet"type="text/css"></head>
<body bgcolor="f0fff0">
<div class="logout">
    <a href="logout.php">Logout</a>
</div>
<br><br>
<h1 align="center"><u>Fill Your Work Log.</u></h1>
<div class="container"align="center">
<form action="index_backend.php" method="post">
    Name:<input type="text"name="done"required><br>
   Date:<input type="date" name="date" required><br>
   Work: <input type="text" name="work" required><br>
   Status:
    <select name="status"value="status">
        <option value="complete">Complete</option>
        <option value="working">Working</option>
    </select><br>

    <input type="submit"value="Fill" name="button">

</form>
</div>
</body>

</html>';
}else{
    echo "<script type=\"text/javascript\">" .
        "alert('Login First!!!');
               window.location.href='login.php';" .
        "</script>";
}