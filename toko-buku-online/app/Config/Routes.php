<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
//  HOME ROUTES
$routes->get('/', 'Home::index');
$routes->get('chart', 'Home::chart');
$routes->get('checkout', 'Home::checkout');
$routes->get('search', 'Home::search');
service('auth')->routes($routes);
$routes->post('submit', 'Home::submit');
service('auth')->routes($routes);



// Admin
$routes->group('admin', ['filter' => 'group:admin'], function ($routes) {
  $routes->get('dashboard', 'AdminController::dashboard');
  $routes->get('databuku', 'AdminController::databuku');
  $routes->get('datatransaksi', 'AdminController::datatransaksi');
  $routes->get('datapelanggan', 'AdminController::datapelanggan');
});