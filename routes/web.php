<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Elastic\Elasticsearch\ClientBuilder;
use Elastic\Elasticsearch\Exception\ClientResponseException;
use Elastic\Elasticsearch\Exception\ServerResponseException;

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
    $params = [
        'index' => 'users',
        'body'  => ['users' => 'marie']
    ];

    try {
        $response = $client->index($params);
    } catch (ClientResponseException $e) {
        // manage the 4xx error
    } catch (ServerResponseException $e) {
        // manage the 5xx error
    } catch (Exception $e) {
        // eg. network error like NoNodeAvailableException
    }

    $params = [
        'index' => 'users',
        'body'  => [
            'query' => [
                'match' => [
                    'users' => 'merio'
                ]
            ]
        ]
    ];
    $response = $client->search($params);
    dd($response['hits']);
    printf("Total docs: %d\n", $response['hits']['total']['value']);
    printf("Max score : %.4f\n", $response['hits']['max_score']);
    printf("Took      : %d ms\n", $response['took']);
    
    print_r($response['hits']['hits']); // documents
    //return view('admin.prueba.prueba');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
