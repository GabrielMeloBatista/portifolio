<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/aboutme', [PortfolioController::class, 'index']);
Route::get('/contato', [ContactController::class, 'index']);