<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Elastic\Elasticsearch\ClientBuilder;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Auth::routes();
Route::get('/admin1', function () {
    $client = ClientBuilder::create()
        ->setHosts(['localhost:9200'])
        ->build();

    // Info API
    $response = $client->info();

    echo $response['version']['number']; // 8.0.0
    return view('admin.prueba.prueba');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
