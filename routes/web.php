<?php

use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\MediaController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ProductDetailController;
use App\Http\Controllers\client\RegistrationController;
use App\Http\Controllers\client\SessionsController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(ProductDetailController::class)->group(function () {
    Route::get('/product/{product} ', 'index');
});
Route::get('/404', function () {
    return view('client.404');
});

Route::get('/blog', function () {
    return view('client.blog');
});
Route::get('/blog-detail', function () {
    return view('client.blog-detail');
});



Route::get('/checkout', function () {
    return view('client.checkout');
});
Route::get('/compare', function () {
    return view('client.compare');
});
Route::get('/forgot', function () {
    return view('client.forgot');
});


Route::get('/order-success', function () {
    return view('client.order-success');
});

Route::get('/shop', function () {
    return view('client.shop');
});
Route::get('/user-dashboard', function () {
    return view('client.user-dashboard');
});
Route::get('/seller-become', function () {
    return view('client.seller-become');
});
Route::get('/seller-dashboard', function () {
    return view('client.seller-dashboard');
});
Route::get('/seller-detail', function () {
    return view('client.seller-detail');
});
Route::get('/seller-list', function () {
    return view('client.seller-list');
});
Route::get('/wishlist', function () {
    return view('client.wishlist');
});
Route::controller(RegistrationController::class)->middleware('guest')->group(function () {
    Route::get('register', 'create');
    Route::post('register', 'store');
});
Route::controller(SessionsController::class)->group(function () {
    Route::get('login', 'create')->middleware('guest');
    Route::post('login', 'store');
    Route::post('admin/login', 'admin_login');
    Route::get('logout', 'destroy');
});

Route::get('admin/login', function () {
    return view('admin.login');
})->name('admin.login')->middleware('guest');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    });
    Route::get('/product', function () {
        return view('admin.product');
    });
    Route::get('/product/create', function () {
        return view('admin.product-create');
    });
    Route::get('/order-list', function () {
        return view('admin.order-list');
    });
    Route::get('/coupon-list', function () {
        return view('admin.coupon-list');
    });
    Route::get('/coupon/create', function () {
        return view('admin.coupon-create');
    });
    Route::get('/product-review', function () {
        return view('admin.product-review');
    });
    Route::controller(MediaController::class)->group(function () {
        Route::get('/media', 'index');
        Route::post('/media', 'store');
        Route::post('/medias', 'deleteMultiple');
        Route::get('media/{media}/delete', 'destroy');
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::get('/category/{category}/edit',  'edit');

        Route::post('/category', 'store');
        Route::put('/category/{category}', 'update');
        Route::get('/category/{category}/delete', 'destroy');
    });
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('/create', [UserController::class, 'create']);
        Route::get('/{user}/edit', [UserController::class, 'edit']);
        Route::post('/', [UserController::class, 'store']);
        Route::put('/{user}', [UserController::class, 'update']);
        Route::get('/{user}/delete', [UserController::class, 'destroy']);
    });
    Route::group(['prefix' => 'attribute'], function () {
        Route::get('/', [AttributeController::class, 'index']);
        Route::get('/create', [AttributeController::class, 'create']);
        Route::get('/{attribute}/edit', [AttributeController::class, 'edit'])->name('admin.attribute.edit');
        Route::post('/', [AttributeController::class, 'store']);
        Route::put('/{attribute}', [AttributeController::class, 'update'])->name('admin.attribute.update');
        Route::get('/{attribute}/delete', [AttributeController::class, 'destroy'])->name('admin.attribute.delete');
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::get('/create', [ProductController::class, 'create']);
        Route::get('/{product}/edit', [ProductController::class, 'edit']);
        Route::post('/', [ProductController::class, 'store']);
        Route::put('/{product}', [ProductController::class, 'update']);
        Route::get('/{product}/delete', [ProductController::class, 'destroy']);
    });
});
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});
Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index');
    Route::post('/cart/create', 'add');
});
