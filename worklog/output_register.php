<?php

include_once 'register_connect.php';

?>


<html>
<table border="2" bgcolor="#a52a2a">
    <tr bgcolor="blue">
        <th>Name</th>
        <th>Assignment</th>
        <th>Date</th>

    </tr>

    <?php
    $sql= "SELECT * FROM data";
    $result = $conn->query($sql);
    if ($result -> num_rows > 0) {
        while ($row = $result -> fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row ["name"] ?> </td>
                <td><?php echo $row ["status"] ?> </td>
                <td><?php echo $row ["date"] ?> </td>
                <tr>

            <?php
        }
    }else {
        echo "0 results";
    }

    $conn->close();
    ?>

</table>


</html>