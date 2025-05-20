<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/* Referral*/
$routes->get('/', 'Home::index');
$routes->get('authenticate', 'Home::authenticate');
$routes->get('view', 'Home::view');
$routes->get('internal_all', 'Home::internal_all');
$routes->get('internal_incoming', 'Home::internal_incoming');
$routes->get('internal_outgoing', 'Home::internal_outgoing');


/* Onboarding */
$routes->get('pricing_plan', 'Home::pricing_plan');
$routes->get('organization_role', 'Home::organization_role');
$routes->get('practitioner_role', 'Home::practitioner_role');
$routes->post('practitioner_profession', 'Home::practitioner_profession');
$routes->get('practitioner_profession', 'Home::practitioner_profession');
$routes->post('verify_credentials', 'Home::verify_credentials');
