<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LinuxMigrationController;
use App\Http\Controllers\AlternativesController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/evaluation', [EvaluationController::class, 'index'])->name('evaluation');
Route::post('/evaluation/calculate', [EvaluationController::class, 'calculate'])->name('evaluation.calculate');
Route::get('/ressources', [ResourceController::class, 'index'])->name('resources');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Nouvelles routes pour les écoles
Route::get('/migration-linux', [LinuxMigrationController::class, 'index'])->name('linux.migration');
Route::get('/alternatives', [AlternativesController::class, 'index'])->name('alternatives');
Route::get('/quiz', [QuizController::class, 'index'])->name('quiz');
Route::get('/dashboard-dirigeants', [DashboardController::class, 'index'])->name('dashboard.leaders');
