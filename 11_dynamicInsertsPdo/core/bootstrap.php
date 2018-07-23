<?php



App::bind('config', require 'config.php');


App::get('config');

App::bind('database', new QueryBuilder(

    Connection::make(App::get('config')['database'])


));