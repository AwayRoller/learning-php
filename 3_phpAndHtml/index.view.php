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

    <style>

        header {
            background: grey;
            padding: 2em;
            text-align: center;
        }

        /*Homework*/
        footer {
            background: beige;
            color: blue;
            padding 1.5em;
            text-align: right;
        }

    </style>

</head>

<body>

    <header>

        <h1>
            <?= $greeting; ?>
        </h1>

<!--        alternative mode-->
        <h1>
            <?= "Hello, " . $name . "!"; ?>
        </h1>

<!--        security - sanitizing input-->
        <h1>
            <?= "Hello, " . $name . "!"; ?>
        </h1>


    </header>


<!--Homework-->
    <footer>

        <h2>
            End of chapter, congrats
            <?= $name ; ?>
        </h2>

    </footer>

</body>

</html>