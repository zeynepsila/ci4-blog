<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/blog/create', 'Blog::create');
$routes->post('/blog/create', 'Blog::create');
$routes->get('/blog/(:any)', 'Blog::post/$1');
$routes->post('/blog/update/(:num)', 'Blog::update/$1');
$routes->get('/edit/(:any)', 'Blog::edit/$1');
$routes->get('/delete/(:any)', 'Blog::delete/$1');
$routes->get('(:any)', 'Pages::showme/$1');

