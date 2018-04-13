<?php

use Illuminate\Http\Request;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/postman', function () {
    return ('index test');
});

Route::post('/postman', function (Request $request) {
    $kip = $request->json()->all();
    return $kip['naam'];
});

Route::post('/newclient', function (Request $request) {
    $new = $request->json()->all();
    $client = new Client();
    $client->name = $new['name'];
    $client->clientnr = $new['clientnr'];
    $client->rank = $new['rank'];
    $client->nationality = $new['nationality'];
    $client->save();
});
