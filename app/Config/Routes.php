<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/detail/(:any)', 'Home::detail');
$routes->get('/detail-article/(:any)', 'Home::detailArticle');
$routes->get('/search/(:any)', 'Home::search');
$routes->get('/shop', 'Home::shop');
$routes->get('/article', 'Home::article');
$routes->get('/whishlist', 'Home::whishlist');
$routes->get('/artist', 'Home::artista');
$routes->get('/terms', 'Home::term');
$routes->get('/privacy-policy', 'Home::privacy');
$routes->get('/compras', 'Home::compra');
$routes->get('/wishlist', 'Home::wishlist');

$routes->resource('usuario', ['controller'=> 'UserController']);
$routes->resource('api/article', ['controller'=> 'ArticleController']);
$routes->resource('api/compras', ['controller'=> 'ComprasController']);
$routes->resource('api/wishlist', ['controller'=> 'WishlistController']);
$routes->resource('api/artist', ['controller'=> 'ArtistController']);
$routes->resource('api/begin', ['controller'=> 'BeginController']);
$routes->get('/api/search/(:segment)', 'BeginController::search/$1');
$routes->get('/api/skills', 'ArtistController::skill');
$routes->get('/api/webshows', 'BeginController::webshows');
$routes->get('/api/records', 'BeginController::record');
$routes->get('/api/series', 'BeginController::series');
$routes->get('/api/log', 'UserController::log');
$routes->get('/api/log_out', 'UserController::log_out');

/*
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
