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

    <?php foreach ($tasks as $task) : ?>


<!--     <li>
            <?php /*if ($task->completed) : */?>
                <strike>
            <?php /*endif; */?>

            <?/*= $task->description; */?>

            <?php /*if ($task->completed) : */?>
                </strike>
            <?php /*endif; */?>

        </li>-->



        <li>
            <?php if ($task->completed) : ?>

                <strike><?= $task->description; ?></strike>

            <?php else: ?>

                <?= $task->description; ?>

            <?php endif; ?>

        </li>

    <?php endforeach; ?>

</body>

</html>