<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 20/07/18
 * Time: 13:13
 */

return [
    'database' => [
        'name' => 'learning_php',
        'username' => 'root',
        'password' => 'Peacetoy',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [

            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING

        ]
    ]
];