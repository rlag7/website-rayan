<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CVController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/github', [GithubController::class, 'index'])->name('github');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

