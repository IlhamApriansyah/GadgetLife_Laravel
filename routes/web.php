<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/',[FrontendController::class, 'index']);
Route::get('product', [FrontendController::class, 'product']);
Route::get('view-product/{nama}', [FrontendController::class, 'viewproduct']);
Route::get('product/{prod_nama}', [FrontendController::class, 'productview']);

Auth::routes();

Route::middleware(['auth','isAdmin'])->group(function () {

   Route::get('/dashboard', [Admin\FrontendController::class, 'index']);
   Route::get('/products', [ProductController::class, 'index']);
   Route::get('/add-products', [ProductController::class, 'add']);
   Route::post('/insert-products', [ProductController::class, 'insert']);
  
   Route::get('edit-product/{id}', [ProductController::class, 'edit']);
   Route::put('update-product/{id}',[ProductController::class, 'update']);
   Route::get('/delete-product/{id}', [ProductController::class, 'delete']);
});
 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
