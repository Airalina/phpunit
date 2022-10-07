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

Route::get('about', function () {
    return 'hola';
});

Route::view('profile', 'profile');

/*
Route::post('profile', function (\Illuminate\Http\Request $request) {
    $request->file('photo')->store('profiles');

    return redirect('profile');
}); */

#Route::post('/profile', 'ProfileController@upload');

Route::post('profile', [\App\Http\Controllers\ProfileController::class, 'upload']);

