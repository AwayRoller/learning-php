<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 19/07/18
 * Time: 13:21
 */

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>

</head>

<body>

<!--Functions homework-->

    <ul>
        <li>
            <strong>Age: </strong> <?= $agePermissions['age']; ?>
        </li>

        <li>
            <strong>Status: </strong><?= ageCheck($agePermissions['age']); ?>
        </li>
    </ul>
</body>

</html>