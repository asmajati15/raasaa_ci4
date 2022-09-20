<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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
// $routes->get('/', 'Pages::index');

// Routes User
$routes->get('/', 'User::index');
$routes->get('/menu/(:segment)', 'User::detail/$1');

// Routes Admin
// Routes Admin - Base Website
$routes->get('/tempat_ngedit', 'Admin::index');
$routes->get('/tempat_ngedit/menu', 'Admin::menu');
$routes->get('/tempat_ngedit/jenis', 'Admin::jenis');
// Routes Admin - Edit Menu
$routes->get('/tempat_ngedit/menu/create_menu', 'Admin::createMenu');
$routes->get('/tempat_ngedit/menu/edit_menu/(:segment)', 'Admin::editMenu/$1');
$routes->delete('/tempat_ngedit/menu/(:num)', 'Admin::deleteMenu/$1');
// Routes Admin - Edit Jenis Makanan
$routes->get('/tempat_ngedit/jenis/create_makanan', 'Admin::createMakanan');
$routes->get('/tempat_ngedit/jenis/edit_makanan/(:segment)', 'Admin::editMakanan/$1');
$routes->delete('/tempat_ngedit/jenis/delete_makanan/(:num)', 'Admin::deleteMakanan/$1');
// Routes Admin - Edit Jenis Minuman
$routes->get('/tempat_ngedit/jenis/create_minuman', 'Admin::createMinuman');
$routes->get('/tempat_ngedit/jenis/edit_minuman/(:segment)', 'Admin::editMinuman/$1');
$routes->delete('/tempat_ngedit/jenis/delete_minuman(:num)', 'Admin::deleteMinuman/$1');
// Routes Admin - Detail Menu
$routes->get('/tempat_ngedit/(:segment)', 'Admin::detailMenu/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
