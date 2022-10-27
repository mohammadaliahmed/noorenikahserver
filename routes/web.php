<?php

use App\Http\Controllers\FirebaseController;
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


Route::get('/', [FirebaseController::class, 'GetAllPosts']);
Route::get('/viewProfile/{id}', [FirebaseController::class, 'ViewProfile']);
Route::get('/viewLikes/{id}', [FirebaseController::class, 'ViewLikes']);
Route::get('/viewComments/{id}', [FirebaseController::class, 'ViewComments']);
Route::get('/submitProfile/', [FirebaseController::class, 'SubmitProfile']);
Route::post('/submitProfile/', [FirebaseController::class, 'SubmitProfile']);


Route::get('/addProposal/', [FirebaseController::class, 'AddProposal']);
Route::post('/addProposal/', [FirebaseController::class, 'AddProposal']);

Route::get('/listProposals/', [FirebaseController::class, 'ListProposals']);
Route::get('/viewProposal/{id}', [FirebaseController::class, 'ViewProposal']);
