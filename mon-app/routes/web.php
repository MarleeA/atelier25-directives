<?php
use App\Http\Controllers\SerieController;
use App\Http\Controllers\PoliceController;
use Illuminate\Support\Facades\Route;

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
Route::get('/series', [SerieController::class, 'index']);
Route::get('/series/{serie}', [SerieController::class, 'show']);

Route::get('/police', [SerieController::class, 'create']);
Route::get('/police', [SerieController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});
