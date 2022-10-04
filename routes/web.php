<?php

use App\Models\User;
use Illuminate\Http\Request;
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
    return view('index');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/log_user', function (Request $request) {
    $request->validate([
        'name'=>'required',
        'phone_number'=>'required|numeric',
        'email'=>'required'
    ]);
    User::create([
        'name'=>$request->name,
        'phone_number'=>$request->phone_number,
        'email'=>$request->email
    ]);

    return redirect('/');
});
