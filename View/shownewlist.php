<?php

include '../controller/UserC.php';

$usC = new UserC(); 

$result = $usC->listUser();

?>


<table border="1">
    <tr>
        <th>id</th>
        <th>Email</th>
        <th>pwd</th>
    </tr>
    <?php 
    foreach ($result as $row) {
    ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['pwd'] ?></td>
 
        </tr>
    <?php
    }
    ?>
</table>