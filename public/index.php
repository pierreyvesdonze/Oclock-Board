<?php
//*********************************************** */
// Requires
//*********************************************** */
// Packages from Composer
require __DIR__ .'/../vendor/autoload.php';



//*********************************************** */
// Get page
//*********************************************** */

// Default page
$pageToDisplay = '/home';
if (isset($_GET['_url'])) {
    $pageToDisplay = $_GET['_url'];
}

//*********************************************** */
// AltoRouter
//*********************************************** */
$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);
// HOME
$router->map(
    'GET',
    '/',
    [
        'action' => 'homeAction',
        'controller' => '\Dashboard\Controllers\MainController'
    ],
    'home'
);

// Astuces
$router->map(
    'GET',
    '/astuces/',
    [
        'action' => 'AstucesAction',
        'controller' => '\Dashboard\Controllers\MainController'
    ],
    'astuces'
);

// PHP
$router->map(
    'GET',
    '/php/',
    [
        'action' => 'phpAction',
        'controller' => '\Dashboard\Controllers\MainController'
    ],
    'php'
);

// JS
$router->map(
    'GET',
    '/js/',
    [
        'action' => 'jsAction',
        'controller' => '\Dashboard\Controllers\MainController'
    ],
    'js'
);

// Shortcuts
$router->map(
    'GET',
    '/shortcuts/',
    [
        'action' => 'shortcutsAction',
        'controller' => '\Dashboard\Controllers\MainController'
    ],
    'shortcuts'
);

// Planning
$router->map(
    'GET',
    '/planning/',
    [
        'action' => 'planningAction',
        'controller' => '\Dashboard\Controllers\MainController'
    ],
    'planning'
);

// Challenge
$router->map(
    'GET',
    '/challenges/',
    [
        'action' => 'challengeAction',
        'controller' => '\Dashboard\Controllers\MainController'
    ],
    'challenges'
);

// Challenge
$router->map(
    'GET',
    '/contact/',
    [
        'action' => 'contactAction',
        'controller' => '\Dashboard\Controllers\MainController'
    ],
    'contact'
);

// Get method and Controller
$match = $router->match();
if ($match) {
    $methodToCall = $match['target']['action'];
    $controllerToUse = $match['target']['controller'];
    $urlParams = $match['params'];
    $controller = new $controllerToUse;
    $controller->$methodToCall($urlParams);
} else {
    // 404
    header("HTTP/1.0 404 Not Found");
    
    exit();
}