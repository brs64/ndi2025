<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AlternativesController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\SensibilisationController;
use App\Http\Controllers\LinuxInstallController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/solution', [SolutionController::class, 'index'])->name('solution');
Route::get('/sensibilisation', [SensibilisationController::class, 'index'])->name('sensibilisation');
Route::get('/alternatives', [AlternativesController::class, 'index'])->name('alternatives');
Route::get('/installer-linux', [LinuxInstallController::class, 'index'])->name('linux.install');
Route::get('/quiz', [QuizController::class, 'index'])->name('quiz');
Route::get('/ressources', [ResourcesController::class, 'index'])->name('resources');
Route::get('/a-propos', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

