<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * 
 */
$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);
$routes->get('consult/konsul', 'Consult::konsul');
