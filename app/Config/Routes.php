<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  documentacion
$routes->get('/', 'UsuariosController::documentacion');

//  obtiene todos los usuarios
$routes->get('/usuarios', 'UsuariosController::index');
// obtiene un usuario por su id
$routes->get('/searchById/(:num)', 'UsuariosController::searchById/$1');
// obtiene usuarios por su  codigo postal
$routes->get('/getUsuariosByPostalCode/(:num)', 'UsuariosController::getUsuariosByPostalCode/$1');
// obtiene usuarios por su numero exterior
$routes->get('/getUsuariosByExteriorNum/(:num)', 'UsuariosController::getUsuariosByExteriorNum/$1');
// obtiene los nombres de usuario que tengan x letra
$routes->get('/getUsuariosNameLetter/(:any)', 'UsuariosController::getUsuariosNameLetter/$1');
// obtiene todos los nombres de los usuarios
$routes->get('getUsuariosNames', 'UsuariosController::getNames');
// obtiene los correos de los usuarios
$routes->get('getEmails', 'UsuariosController::getEmails');
