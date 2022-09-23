<?php

use App\Models\User;
use Illuminate\Support\Str;
use Elastic\Elasticsearch\Client;
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
    $client=User::create(['name' => 'Marito','email'=>Str::random(3).'@gmail.com','password'=>'12345']);
    
    return view('admin.prueba.prueba');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/search', function(Client $client) {
    $res = $client->search([
        'index' => 'users',
        'type' => 'users',
        'body' => [
            'query' => [
                'match' => [
                    'name' => 'merio'
                ]
            ]
        ]
    ]);

    dd($res);
});

