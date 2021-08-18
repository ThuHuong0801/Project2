<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
use App\Http\Middleware\CheckLogin;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

// Route::method(uri, action);

// Authentication
// Tạo middleware CheckLogged: nếu đăng nhập rồi thì quay về trang dashboard còn chưa thì ok
Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
Route::post('/login-process', [AuthenticateController::class, 'loginProcess'])->name('login-process');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');




Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/logout', [AuthenticateController::class, 'logout'])->name('logout');

    //route quản lý của admin trong này nèeee

//     Route::get("/mail", function () {
//         Mail::to("yahoo@gmail.com")->send(new TestMail());
//     });
});



