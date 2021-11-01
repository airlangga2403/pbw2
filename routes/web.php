<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\Members;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\VehiclesController;
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

Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/' function(){
//     return view
// }

// Route::resource('/members','[RedirectsController::class,[RedirectsController::class,MembersController]);
// route::get('/members',[MembersController::class,'create']);

Route::resource('members', '\App\Http\Controllers\MembersController');
// Route::resource('vehicles', '\App\Http\Controllers\VehiclesController');
// Route::resource('transactions', '\App\Http\Controllers\TransactionsController');
// Route::resource('details', '\App\Http\Controllers\DetailsController');
// Route::resource('members', '\App\Http\Controllers\MembersController');

Route::get('/vehicles/vehiclelist',[VehiclesController::class,'vehicleList']);
Route::get('/vehicles/vehicleadd',[VehiclesController::class,'vehicleAdd']);

Route::get('/transactions/transactionslist',[TransactionsController::class,'transactionsList']);
Route::get('/transactions/transactionsadd',[TransactionsController::class,'transactionsAdd']);

Route::get('/details/detailadd/{idTransactions}',[DetailsController::class,'detailAdd']);
Route::get('/details/detaillist/{idTransactions}',[DetailsController::class,'detailList']);

Route::get('/services/serviceslist',[ServicesController::class,'servicesList']);
Route::get('/services/servicesadd',[ServicesController::class,'servicesAdd']);