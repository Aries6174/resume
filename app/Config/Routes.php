<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/websites', 'Portfolio::websites');
$routes->get('/artworks', 'Portfolio::artworks');
$routes->get('test', 'Test::index');

$routes->group('data', ['filter' => 'csrf'], function($routes) {
    $routes->get('/', 'DataController::getData');
    $routes->post('update', 'DataController::updateSection');
});
$routes->get('data', 'DataController::getData');
$routes->post('data/update', 'DataController::updateSection');
?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
