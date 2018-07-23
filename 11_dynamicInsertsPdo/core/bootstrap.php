<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 20/07/18
 * Time: 12:33
 */

$app = [];

$app['config'] = require 'config.php';



//connect and exceptions
require 'db/Connection.php';

require 'db/QueryBuilder.php';

require 'core/Router.php';

require 'core/Request.php';


$app['database'] = new QueryBuilder
(
    Connection::make($app['config']['database'])
);