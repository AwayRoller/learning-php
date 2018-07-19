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

        ul {
            background: grey;
            padding: 2em;
            text-align: center;
        }

        ol {
            background: lightblue;
            color: orangered;
            text-align: left;
        }

    </style>

</head>

<body>

    <ul>

        <?php
            foreach ($names as $name) {
                echo "<li>$name</li>";
            }
        ?>
        <br>

<!--        2nd form - more useful -->
        <?php foreach ($names as $name) : ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>

    </ul>


<!--    Homework-->

    <ul>
        <?php foreach ($animals as $animal) : ?>
            <li><?= $animal ?></li>
        <?php endforeach; ?>
    </ul>

<!--    Let's try an ordered one-->
    <ol>
        <?php foreach ($animals as $animal) : ?>
            <li><?= $animal ?></li>
        <?php endforeach; ?>
    </ol>




<!--Associative arrays-->
    <ul>
        <?php foreach ($person as $key => $val) : ?>
            <li><strong><?= $key; ?></strong> <?= $val ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <?php foreach ($person as $feature => $property) : ?>
            <li><strong><?= $feature; ?></strong> <?= $property ?></li>
        <?php endforeach; ?>
    </ul>

<!--Homework-->

    <h1>Tasks for the Day</h1>

    <ul>
    <?php foreach ($tasks as $heading => $status) : ?>
        <li>
            <strong><?= ucwords($heading); ?></strong>:
            <?= $status ?>
        </li>
    <?php endforeach; ?>
    </ul>

    <!--need more control-->
    <ul>
        <li>
            <strong>Name: </strong> <?= $tasks['title']; ?>
        </li>

        <li>
            <strong>Due date: </strong> <?= $tasks['due']; ?>
        </li>

        <li>
            <strong>Person responsible: </strong> <?= $tasks['assigned_to']; ?>
        </li>

        <li>
            <strong>Status: </strong> <?= $tasks['completed'] ? 'Complete' : 'Incomplete'; ?>
            <?php if ($tasks['completed']) : ?>
                <span class=""icon">&#9989;</span>
            <?php else : ?>
                <span class=""icon">&#9785;</span>
            <?php endif; ?>
        </li>
    </ul>
</body>

</html>