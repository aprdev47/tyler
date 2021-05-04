<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/samples/form', [App\Http\Controllers\Samples\SamplesController::class, 'sampleForm'])->name('sample_form');
Route::get('/subscriptions/count', function () {
    return response()->json([
        'success' => true,
        'subscription_count' => \App\Models\Subscription::count()
    ]);
});

Route::post('/subscribe', [App\Http\Controllers\Samples\SubscriptionController::class, 'subscribe'])->name('subscribe');
