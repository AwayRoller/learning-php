<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'Task.php';


$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos', Task::class);

/*$tasks = array_map( function ($task) {

    return new Task();

}, $tasks);*/


dd($tasks);


require 'index.view.php';
