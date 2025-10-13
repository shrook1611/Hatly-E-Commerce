<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\customer\CartController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\OrderController;

use App\Http\Controllers\Customer\WishListController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BestSellerController;

use Illuminate\Support\Facades\Mail;
Route::view('/', 'welcome');

Route::view('dashboard', 'welcome')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('login', function () {
    return redirect('userhome');
})->name('login');


Route::view('register', 'register')
    
    ->name('register');

Route::get('/logout', function () {
    $logout = new \App\Livewire\Actions\Logout();
    $logout();
    return redirect('login');
})->middleware(['auth'])->name('logout');






require __DIR__ . '/auth.php';
Route::view('/home', 'admin.home')->name('home');
Route::middleware(['auth'])->group(function () {

    // /Category routes
    Route::controller(CategoryController::class)->group(function () {
        Route::get('category', 'index')->name('category');
        Route::post('category', 'store')->name('category.store');
        Route::get('category/create', 'create')->name('category.create');
        Route::get('category/edit/{id}', 'edit')->name('category.edit');
        Route::post('category/update/{id}', 'update')->name('category.update');
        Route::get('category/delete/{id}', 'delete')->name('category.delete');
    });


    // /Product Routes
    Route::controller(ProductController::class)->group(function () {
        Route::get('product', 'index')->name('product');

        Route::get('product/create', 'create')->name('product.create');
        Route::post('product', 'store')->name('product.store');
        Route::get('product/edit/{id}', 'edit')->name('product.edit');
        Route::post('product/update/{id}', 'update')->name('product.update');
        Route::get('product/delete/{id}', 'delete')->name('product.delete');
    });



    // /user routes
    Route::controller(UserController::class)->group(function () {
        Route::get('user', 'index')->name('user');

        Route::get('user/create', 'create')->name('user.create');
        Route::post('user', 'store')->name('user.store');
        Route::get('user/edit/{id}', 'edit')->name('user.edit');
        Route::post('user/update/{id}', 'update')->name('user.update');
        Route::get('user/delete/{id}', 'delete')->name('user.delete');
    });
});
Route::get('/userhome', [HomeController::class, 'index'])->name('userhome');
// cart routes
Route::controller(CartController::class)->group(function () {
    
    Route::post('addCart/{id}', 'addToCart')->name('addCart');
  
  Route::delete('/cart/item/{id}', [CartController::class, 'deleteItem'])->name('cart.deleteItem');

});
// wishlist routes

Route::controller(WishListController::class)->group(function () {
    Route::post('addWish/{id}', 'addToWish')->name('addWish');
Route::get('wishlist/delete/{id}', 'delete')->name('wish.delete');
    Route::delete('/wish/item/{id}', [WishlistController::class, 'removeItem'])->name('wish.deleteItem'); 
   Route::post('/wishlist/toggle/{product}', [WishlistController::class, 'toggle'])
    ->name('wishlist.toggle');

});
// order routes
Route::controller(OrderController::class)->group(function () {
    Route::post('/create-order', 'createOrder')->name('createOrder');
    Route::get('order','index')->name('order');
    Route::get('order/delete/{id}', 'delete')->name('order.delete');
    Route::get('order/view/{id}', 'show')->name('order.view');
});

Route::get('orderdetails', [OrderController::class, 'showCustomerOrderDetails'])->name('orderdetails');
Route::get('/contact', function () {
    return view('customer.contact');
})->name('contact');


Mail::raw('This is a test email', function ($message) {
    $message->to('user@example.com')
            ->subject('Test Email');
});