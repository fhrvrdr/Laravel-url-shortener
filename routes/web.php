<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortenerController;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [ShortenerController::class, 'index'])->name('home');
Route::post('/short', [ShortenerController::class, 'short_url'])->name('short');
Route::get('/sl{id}', [ShortenerController::class, 'slug']);
