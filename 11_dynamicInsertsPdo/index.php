<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 19/07/18
 * Time: 12:07
 */

require 'vendor/autoload.php';

require 'core/bootstrap.php';


use App\Core\{Router, Request};




/*$router = new Router;

require 'routes.php';

$uri = trim(($_SERVER['REQUEST_URI']), '/');


require $router->direct($uri);*/


Router::load('app/routes.php')

        ->direct(Request::uri(), Request::method());




