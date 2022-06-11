<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recruitement;
use App\Http\Controllers\RecruitementController;
use App\Http\Controllers\CommentController;

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


Route::get('/', [RecruitementController::class, 'index']);

Route::get('/recruitements/create', [RecruitementController::class, 'create']);

Route::post('/recruitements', [RecruitementController::class, 'store']);

Route::get('recruitements/{recruitement}/edit', [RecruitementController::class, 'edit']);

Route::put('recruitements/{recruitement}', [RecruitementController::class, 'update']);

Route::delete('recruitements/{recruitement}', [RecruitementController::class, 'destroy']);

Route::post('/comment', [CommentController::class, 'storeComment']);




