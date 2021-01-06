<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');

$routes->get('/pages/items', 'Pages::items', ['filter' => 'role:admin']);
$routes->get('/pages/user', 'Pages::user', ['filter' => 'role:admin']);
$routes->get('/pages/transaksi', 'Pages::transaksi', ['filter' => 'role:admin']);
$routes->get('/pages/itemscreate', 'Pages::itemscreate', ['filter' => 'role:admin']);
$routes->get('/pages/itemsedit', 'Pages::itemsedit', ['filter' => 'role:admin']);

$routes->get('/Pages/items', 'Pages::items', ['filter' => 'role:admin']);
$routes->get('/Pages/user', 'Pages::user', ['filter' => 'role:admin']);
$routes->get('/Pages/transaksi', 'Pages::transaksi', ['filter' => 'role:admin']);
$routes->get('/Pages/itemscreate', 'Pages::itemscreate', ['filter' => 'role:admin']);
$routes->get('/Pages/itemsedit', 'Pages::itemsedit', ['filter' => 'role:admin']);


$routes->get('/Pages/index', 'Pages::index', ['filter' => 'role:user']);
$routes->get('/pages/produk', 'Pages::produk', ['filter' => 'role:user']);
$routes->get('/pages/Detailproduk', 'Pages::Detailproduk', ['filter' => 'role:user']);
$routes->get('/pages/About', 'Pages::About', ['filter' => 'role:user']);
$routes->get('/pages/cart', 'Pages::cart', ['filter' => 'role:user']);
$routes->get('/pages/where', 'Pages::where', ['filter' => 'role:user']);

$routes->get('/Pages/produk', 'Pages::items', ['filter' => 'role:user']);
$routes->get('/Pages/Detailproduk', 'Pages::Detailproduk', ['filter' => 'role:user']);
$routes->get('/Pages/About', 'Pages::About', ['filter' => 'role:user']);
$routes->get('/Pages/cart', 'Pages::cart', ['filter' => 'role:user']);
$routes->get('/Pages/where', 'Pages::where', ['filter' => 'role:user']);

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
