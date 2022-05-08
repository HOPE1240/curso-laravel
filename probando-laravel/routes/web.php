<?php

use Illuminate\Support\Facades\Route;
use Psy\Command\WhereamiCommand;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contacto/{nombre?}/{edad?}', function (
    $nombre = "santiago garcia uribe",
    $edad = "21"
) {
    return view('contacto', array(
        "nombre" => $nombre,
        "edad" => $edad
    ));

})->where(['nombre' => '[A-Za-z]+',
'edad'=>'[0-9]+']);
