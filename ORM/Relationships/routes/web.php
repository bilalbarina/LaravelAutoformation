<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Controller;
use App\Http\Middleware\RequestExemple;
use App\Models\User;
use Illuminate\Http\Request;

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

Route::get('/user/hasOne', function() {
    $user = User::find(1);
    echo $user->phone;
});