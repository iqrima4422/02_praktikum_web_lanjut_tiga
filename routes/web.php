<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Praktikum 3
// Route::get('/', [HomeController::class, 'index']);
// Route::prefix('products')->group(function () {
//     Route::get('/',  [ProductsController::class, 'products']);
//     });

// Route::get('/news', [NewsController::class, 'news']);
// Route::get('/program', [ProgramController::class, 'program']);
// Route::get('/aboutUs', [AboutUsController::class, 'aboutUs']);

// Praktikum 3
Route::get("/", [HomeController::class, 'index']);

Route::prefix("category")->group(function(){
    Route::get("/marbel-edu-games", [ProductsController::class, 'cat1']);
    Route::get("/marbel-and-friends-kind-games", [ProductsController::class, 'cat2']);
    Route::get("/riri-story-books", [ProductsController::class, 'cat3']);
    Route::get("/kolak-kids-songs", [ProductsController::class, 'cat4']);
});

// Route::get("/news/{berita}", [NewsController::class, 'index']);
Route::get('news', [NewsController::class, 'news']);
Route::get('news/{title}', [NewsController::class, 'newsTitle']);

Route::prefix("program")->group(function(){
    Route::get("/karir", [ProgramController::class, 'karir']);
    Route::get("/magang", [ProgramController::class, 'magang']);
    Route::get("/kunjungan-industri", [ProgramController::class, 'kunjunganIndustri']);
});

Route::get("/about-us", [AboutUsController::class, 'about']);

Route::get('news', [NewsController::class, 'news']);
Route::get('news/{title}', [NewsController::class, 'newsTitle']);

Route::resource('/contact-us', ContactUsController::class, [
    'only' => ['index', 'create', 'store']
]);