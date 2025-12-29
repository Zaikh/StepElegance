<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;


// Public Routes
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/index', [PageController::class, 'index'])->name('index');
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/About_US', [PageController::class, 'about'])->name('about');
Route::get('/Contact_us', [PageController::class, 'contact'])->name('contact');
Route::get('/Offers', [PageController::class, 'offers'])->name('offers');

// Authentication Routes
Route::get('/Sign_in', [AuthController::class, 'showLogin'])->name('login');
Route::post('/Sign_in', [AuthController::class, 'processLogin'])->name('login.process');
Route::get('/Signup', [AuthController::class, 'showSignup'])->name('signup');
Route::post('/Signup', [AuthController::class, 'processSignup'])->name('signup.process');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/Dashboard', function () {
        return view('Dashboard');
    })->name('dashboard');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//Admin Routes
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth:admin')->name('admin.dashboard');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');



//products
Route::get('/home', [ProductController::class, 'showProducts']);

// Add product
Route::post('/admin/add-product', [AdminController::class, 'addProduct'])->name('admin.addProduct');

// Edit form show
Route::get('/admin/edit-product/{id}', [ProductController::class, 'editProduct'])->name('admin.editProduct');

// Update product
Route::post('/admin/update-product/{id}', [ProductController::class, 'updateProduct'])->name('admin.updateProduct');

// Delete product
Route::get('/admin/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('admin.deleteProduct');

// Cart Routes
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/buy-now', [CartController::class, 'buyNow'])->name('cart.buyNow');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/update-size', [CartController::class, 'updateSize'])->name('cart.updateSize');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

// Checkout Route (placeholder - you'll need to implement this)
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');



Route::post('/place-order', [CheckoutController::class, 'store'])->name('place.order');



// Admin protected routes should use the admin guard. Removed duplicate route that used the default
// `auth` guard which caused admin logins to be treated as regular users.
Route::middleware(['auth:admin'])->group(function () {
    // Add admin-only routes here (uses admin guard)
});

