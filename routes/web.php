<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/about', function () {
    return 'this is about';
});

Route::view('profile', 'profile');

Route::post('profile',[ProfileController::class, 'upload']);

/*
Route::post('profile', function (Illuminate\Http\Request $request) {
    $request->file('photo')->store('profiles');

    return redirect('profiles');
});*/
