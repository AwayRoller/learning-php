<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 19/07/18
 * Time: 12:07
 */

$greeting = "Hello World!";

$name = htmlspecialchars($_GET['name']);

require 'index.view.php';

