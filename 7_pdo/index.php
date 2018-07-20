<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 19/07/18
 * Time: 12:07
 */

require 'Task.php';


//connect and exceptions
require 'functions.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);


//var_dump($tasks[0]->description);


require 'index.view.php';
