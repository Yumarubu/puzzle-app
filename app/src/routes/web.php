<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthControlloer;
use \App\Http\Middleware\AuthMiddleware;

//Route::get('/', function (){
    //return view('welcome');
//});

Route::get('/', [AccountController::class, 'login']);
//Route::get('/{error_id?}', [AccountController::class, 'login']);
Route::get('accounts/index',[AccountController::class, 'index']);
//Route::post('dologin', [AccountController::class, 'dologin']);

//一覧表示画面
//Route::get('items/index',[ItemController::class,'index'])->name('items.index');

//登録画面
//Route::get('items/create',[ItemController::class,'create'])->name('items.create');

//登録処理

Route::prefix('itemx')->name('items.')->controller(ItemController::class)
    ->middleware(AuthMiddleware::class)->group(function (){
        Route::get('index','index')->name('index');
        Route::get('create','create')->name('create');
        Route::get('store','store')->name('store');
    });
