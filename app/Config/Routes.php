<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contact', 'Home::contact');
$routes->get('/aboutus', 'Home::aboutus');
$routes->get('/team', 'Home::team');
$routes->get('/bsc', 'Home::bsc');
$routes->get('/msc', 'Home::msc');
$routes->post('/insert', 'Home::insert');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/page', 'Admin::page');
$routes->post('/admin/dashboard', 'Admin::logIn');
$routes->get('/admin/form', 'Admin::form');
$routes->post('/admin/lecture', 'Admin::lecture');
$routes->get('/admin/student', 'Admin::dashboard');
$routes->get('/admin/lectures', 'Admin::lectures');