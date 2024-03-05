<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::controller(PortfolioController::class)->group(function () {
  Route::get('/portfolio', [PortfolioController::class, 'index']);
  Route::get('/portfolio/colecoes-fauna-brasil', [PortfolioController::class, 'colecoesFaunaBrasil']);
  Route::get('/portfolio/escola-renovacao', [PortfolioController::class, 'escolaRenovacao']);
  Route::get('/portfolio/pantera-motors', [PortfolioController::class, 'panteraMotors']);
  Route::get('/portfolio/show-gospel', [PortfolioController::class, 'showGospel']);
  Route::get('/portfolio/tempestade-criativa', [PortfolioController::class, 'tempestadeCriativa']);
});