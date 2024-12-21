<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'indexlogin::Mindexlogin');

$routes->get('/formulario', 'Cformulario::Mformularios');