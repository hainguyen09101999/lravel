<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AddProduct;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use GuzzleHttp\Middleware;

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/blog',[PageController::class,'blog'])->name('blog');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/shop',[PageController::class,'shop'])->name('shop');
Route::get('danhmuc/{id}',[PageController::class,'product'])->name('productlist');
Route::get('chitiet/{slug}',[PageController::class,'chitiet'])->name('chitiet');
Route::get('/search', [PageController::class,'search'])->name('search');


Route::get('/dangki',[UserController::class,'dangki'])->name('dangki');
Route::post('/dangkipost',[UserController::class,'guidulieu'])->name('dangkipost');
Route::post('/dangnhap',[UserController::class,'nhandulieu'])->name('nhandulieu');
Route::get('/dangnhap',[UserController::class,'dangnhap'])->name('dangnhap');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/adminlogin', [LoginController::class,'adminlogin'])->name('adminlogin');
Route::post('/login', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/out', [LoginController::class,'out'])->name('out');

Route::prefix('admin')->middleware('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('home.admin');
    Route::get('/all-product', [AddProduct::class, 'index'])->name('all-product');
    Route::get('/add-product', [AddProduct::class, 'create'])->name('add-product');

    Route::post('/add-product', [AddProduct::class, 'store'])->name('post-product');
    
    Route::get('/delete-product/{id}', [AddProduct::class, 'destroy'])->name('delete-product');
    Route::get('/edit-product/{id}', [AddProduct::class, 'edit'])->name('edit-product');
    Route::PUT('/edit-product/{id}', [AddProduct::class, 'update'])->name('upload-product');
});