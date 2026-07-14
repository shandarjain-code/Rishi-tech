<?php

use App\Http\Controllers\Api\PortfolioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/projects', [PortfolioController::class, 'getProjects']);
Route::get('/services', [PortfolioController::class, 'getServices']);
Route::get('/skills', [PortfolioController::class, 'getSkills']);
Route::post('/leads', [PortfolioController::class, 'submitLead']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
