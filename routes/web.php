<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/patient/sign-up', 'Patient\SignUpController@index');
$router->get('/commom/login', 'Commom\LoginController@index');
$router->post('/patient/sign-up', 'Patient\SignUpController@signUp');
$router->post('/commom/login', 'Commom\LoginController@login');
$router->get('/patient/booking', 'Patient\BookingController@index');
$router->post('/patient/booking', 'Patient\BookingController@dataDoctors');
$router->post('/admin/view', 'Admin\AdminController@viewPatient');
