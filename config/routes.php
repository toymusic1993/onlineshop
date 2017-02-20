<?php


use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    
    $routes->connect('/', ['controller' => 'Products', 'action' => 'index']);
	$routes->connect('/adminproducts', ['controller' => 'Users', 'action' => 'adminproducts']);
	$routes->connect('/adminusers', ['controller' => 'Users', 'action' => 'adminusers']);
	$routes->connect('/adminorders', ['controller' => 'Users', 'action' => 'adminorders']);
	$routes->connect('/adminhome', ['controller' => 'Users', 'action' => 'adminhome']);
    $routes->fallbacks(DashedRoute::class);
});

Plugin::routes();
