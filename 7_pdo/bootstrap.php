<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 20/07/18
 * Time: 12:33
 */

//connect and exceptions
require 'db/Connection.php';

require 'db/QueryBuilder.php';


require 'functions.php';


return new QueryBuilder
(
    Connection::make()
);