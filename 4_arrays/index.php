<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 19/07/18
 * Time: 12:07
 */

$names = [
    'Zsolt',
    'Zsolt2',
    'Zsolt3'
];

//foreach ($names as $name) {
//    echo $name . ', ';
//}

//Homework
$animals = [
    'zebra',
    'dog',
    'cat',
    'rabbit',
    'wolf'
];

/** Associative arrays */

$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'webdev'
];

$person['name'] = 'Zsolt';

// remove value
unset($person['age']);

//Homework
$tasks = [
    'title' => 'dustcleaning', //'washing up'],
    'due' => 'today', //'toyota'],
    'assigned_to' => 'me', //'notMe'],
    'completed' => false //, true]

]; //title, due, assigned_to, completed

// echo a non-primitive and do not proceed further
    //var_dump($person);
    //die();
//die(var_dump($tasks));




require 'index.view.php';

