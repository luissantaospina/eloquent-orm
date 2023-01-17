<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');});

Route::get('/destinations', [DestinationController::class, 'index']);
Route::get('/destinations/store', [DestinationController::class, 'store']);
Route::get('/destinations/last', [DestinationController::class, 'indexWithDate']);
Route::get('/flights', [FlightController::class, 'index']);
Route::get('/flights/first', [FlightController::class, 'indexFirst']);
Route::get('/flights/firstOrCreate', [FlightController::class, 'indexFirstOrCreate']);
Route::get('/flights/where', [FlightController::class, 'indexWhereWithAction']);
Route::get('/flights/store', [FlightController::class, 'store']);
Route::get('/destinations/methods', [DestinationController::class, 'indexWithMethods']);
