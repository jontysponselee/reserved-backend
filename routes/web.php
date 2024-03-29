<?php


use Illuminate\Support\Str;

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
$router->get('/treatments', ['uses' => 'TreatmentController@index']);

$router->get('/hairdressers', ['uses' => 'HairdresserController@index']);
$router->get('/hairdressers/appointments', ['uses' => 'HairdresserController@appointments']);

$router->post('/appointment', ['uses' => 'AppointmentController@store']);
