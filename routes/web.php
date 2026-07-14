<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\SeoController;

Route::get('/robots.txt', [SeoController::class, 'robots'])->name('robots');
Route::get('/sitemap.xml', [SeoController::class, 'sitemap'])->name('sitemap');

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('project.show');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/start-project', [LeadController::class, 'create'])->name('start-project');
Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');
Route::get('/thank-you', [LeadController::class, 'thankYou'])->name('thank-you');
Route::post('/api/quote', [LeadController::class, 'storeQuote'])->name('api.quote.store');
