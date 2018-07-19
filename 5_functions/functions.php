<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 19/07/18
 * Time: 15:53
 */

function dd($data) {
    die(var_dump($data));
}

function ageCheck($age) {
    if ($age < 21) {
        echo 'Go away';
        //dd($age);
    } else {
        echo 'Come in';
        //dd($age);
    }
}