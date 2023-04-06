<?php
session_start();
$app = [];
require 'connection.php';
$app['db'] = (new database())->db;

$routes = [
    '/' => 'controller/loginpage.php',
    '/loginquery' => 'controller/loginquery.php',
    '/signuppage' => 'controller/signuppage.php',
    '/signupquery' => 'controller/signupquery.php',
    '/home' => 'controller/home.php',
    '/logout' => 'controller/logout.php',


    // '/list' => 'controllers/list.php',
    // '/delete' => 'controllers/delete.php',
    // '/edit' => 'controllers/edit.php',
    // '/update' => 'controllers/update.php',



 
];

if (array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
   require $routes[$_SERVER['REQUEST_URI']];
}
//  else {
//    http_response_code(404);
//    require 'Views/errors/404.view.php';
// }

?>