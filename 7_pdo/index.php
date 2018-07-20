<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 19/07/18
 * Time: 12:07
 */

require 'Task.php';


$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos', 'Task');

/*$tasks = array_map( function ($task) {

    return new Task();

}, $tasks);*/


dd($tasks);


require 'index.view.php';
