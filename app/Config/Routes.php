<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/blog/create', 'Blog::create');
$routes->post('/blog/create', 'Blog::create');
$routes->get('/blog/(:any)', 'Blog::post/$1');
$routes->get('(:any)', 'Pages::showme/$1');
