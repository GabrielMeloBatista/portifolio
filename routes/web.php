<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/aboutme', [PortfolioController::class, 'index']);
