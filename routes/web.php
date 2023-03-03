<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\Shule\Njia\NjiaController;
use App\Http\Controllers\Shule\Room\RoomController;
use App\Http\Controllers\Shule\User\UserController;
use App\Http\Controllers\Shule\Level\LevelController;
use App\Http\Controllers\Shule\Darasa\DarasaController;
use App\Http\Controllers\Shule\Stream\StreamController;
use App\Http\Controllers\Shule\Vehicle\VehicleController;
use App\Http\Controllers\Shule\Domitory\DomitoryController;
use App\Http\Controllers\Shule\Dashboard\DashboardController;

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
    return view('auth.login');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index']);
//Domitory
Route::get('dom-list',[DomitoryController::class,'index']);
Route::post('dom-store',[DomitoryController::class,'store']);
Route::post('dom-update',[DomitoryController::class,'update']);
Route::put('dom-delete',[DomitoryController::class,'destroy']);

//Rooms
Route::get('room-list',[RoomController::class,'index']);
Route::post('room-store',[RoomController::class,'store']);
Route::post('room-update',[RoomController::class,'update']);
Route::put('room-delete',[RoomController::class,'destroy']);

//Levels
Route::get('level-list',[LevelController::class,'index']);
Route::post('level-store',[LevelController::class,'store']);
Route::post('level-update',[LevelController::class,'update']);
Route::put('level-delete',[LevelController::class,'destroy']);

//Classes
Route::get('darasa-list',[DarasaController::class,'index']);
Route::post('darasa-store',[DarasaController::class,'store']);
Route::post('darasa-update',[DarasaController::class,'update']);
Route::put('darasa-delete',[DarasaController::class,'destroy']);

//Classes
Route::get('stream-list',[StreamController::class,'index']);
Route::post('stream-store',[StreamController::class,'store']);
Route::post('stream-update',[StreamController::class,'update']);
Route::put('stream-delete',[StreamController::class,'destroy']);

//Routes
Route::get('njia-list',[NjiaController::class,'index']);
Route::post('njia-store',[NjiaController::class,'store']);
Route::post('njia-update',[NjiaController::class,'update']);
Route::put('njia-delete',[NjiaController::class,'destroy']);

//Vehicles
Route::get('vehicle-list',[VehicleController::class,'index']);
Route::post('vehicle-store',[VehicleController::class,'store']);
Route::post('vehicle-update',[VehicleController::class,'update']);
Route::put('vehicle-delete',[VehicleController::class,'destroy']);

//Users
Route::get('user-list',[UserController::class,'index']);
Route::post('user-store',[UserController::class,'store']);
Route::post('user-update',[UserController::class,'update']);
Route::put('user-delete',[UserController::class,'destroy']);
Route::post('fetch-class',[UserController::class,'fetchClass']);
Route::post('fetch-stream',[UserController::class,'fetchStream']);
Route::post('fetch-vehicle',[UserController::class,'fetchVehicle']);
Route::post('fetch-room',[UserController::class,'fetchRoom']);
});


    

