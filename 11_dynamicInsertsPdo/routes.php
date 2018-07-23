<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 20/07/18
 * Time: 13:58
 */

/*$router->define ([

    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about/culture' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php',

    'names' => 'controllers/add-name.php'  //only for POST types

]);*/


$router->get('', 'PagesController@home');

$router->get('about', 'PagesController@about');

$router->get('about/culture', 'PagesController@aboutCulture');

$router->get('contact', 'PagesController@contact');


$router->post('names', 'PagesController@add-name');

$router->get('users', 'UsersController@index');

$router->post('users', 'UsersController@store');



