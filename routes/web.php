<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes - Portofolio Farhan
|--------------------------------------------------------------------------
|
| Di sini kita mendaftarkan semua URL/halaman website.
|
| Format dasar:
|   Route::get('url', [NamaController::class, 'namaMethod']);
|
| Artinya:
|   - 'url'         → alamat yang diketik di browser
|   - NamaController → controller yang akan menangani request
|   - 'namaMethod'  → fungsi/method di dalam controller yang dipanggil
|
*/

// Halaman Home → URL: http://localhost:8000/
Route::get('/', [PortfolioController::class, 'home'])->name('home');

// Halaman About → URL: http://localhost:8000/about
Route::get('/about', [PortfolioController::class, 'about'])->name('about');

// Halaman Skills → URL: http://localhost:8000/skills
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');

// Halaman Projects → URL: http://localhost:8000/projects
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');

// Halaman Experience → URL: http://localhost:8000/experience
Route::get('/experience', [PortfolioController::class, 'experience'])->name('experience');

// Halaman Education → URL: http://localhost:8000/education
Route::get('/education', [PortfolioController::class, 'education'])->name('education');

// Halaman Contact → URL: http://localhost:8000/contact
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
