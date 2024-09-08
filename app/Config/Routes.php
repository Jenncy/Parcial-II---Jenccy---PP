<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_integrantes','IntegrantesController::verIntegrantes');

$routes->get('insertar_integrante','IntegrantesController::insertarIntegrante');
$routes->get('eliminar_integrante/(:num)','IntegrantesController::eliminarIntegrante/$1');
$routes->get('actualizar_integrante/(:num)','IntegrantesController::actualizarIntegrante/$1');
$routes->post('guardar_integrante','IntegrantesController::guardarIntegrante');
$routes->post('modificar_integrante','IntegrantesController::modificarIntegrante');
