<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 20/07/18
 * Time: 13:46
 */

//$tasks = $app['database']->selectAll('todos');

$users = $app['database']->selectAll('users');


require 'views/index.view.php';
