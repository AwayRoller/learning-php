<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 23/07/18
 * Time: 11:05
 */

$app['database']->insert('users',
[
    'name' => $_POST['name']

]);

//redirect after submit
header('Location: /');