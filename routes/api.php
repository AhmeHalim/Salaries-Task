<?php

use Illuminate\Http\Request;
use App\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('/monthSlaries','SalaryController@monthSlaries');
    Route::post('/customMonthSalaries','SalaryController@customMonthSalaries');
});
