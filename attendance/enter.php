<html>
<?php
session_start();
if ($_SESSION['success']==true) {
    echo '
<html>
<head><title>Fill the Sheet</title><link href="enter.css"rel="stylesheet"type="text/css"></head>
<body bgcolor="f0fff0">
<div class="logout">
    <button id="but"><a href="logout.php" style="color:darkred">Logout</a></button>
</div>
<br><br>
<h1 align="center"><u>Attendance check.</u></h1>
<div class="container"align="center">
<form action="enter_backend.php" method="post">
    Name:<input type="text"name="done" required id="box"><br>
    Date:<input type="date" name="date" required id="box"><br>
    Status:
    <select name="status"value="status" id="box">
        <option value="present">Present</option>
        <option value="absent">Absent</option>
    </select><br><br>

    <input type="submit"value="Fill" name="button" id="buton"style="background-color: brown">

</form>
</div>
</body>

</html>';
}else{
    echo "<script type=\"text/javascript\">" .
        "alert('Login First!!!');
               window.location.href='login.php';" .
        "</script>";
}?>
</html>