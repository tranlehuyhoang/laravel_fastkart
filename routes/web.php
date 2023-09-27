<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\MediaController;
use App\Http\Controllers\admin\UserController;
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

Route::get('/404', function () {
    return view('client.404');
});
Route::get('/', function () {
    return view('client.home');
});
Route::get('/blog', function () {
    return view('client.blog');
});
Route::get('/blog-detail', function () {
    return view('client.blog-detail');
});

Route::get('/cart', function () {
    return view('client.cart');
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
Route::get('/product-detail', function () {
    return view('client.product-detail');
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
    Route::get('logout', 'destroy');
});

Route::get('admin/login', function () {
    return view('admin.login');
})->name('admin.login');

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

    Route::get('/attribute', function () {
        return view('admin.attribute');
    });
    Route::get('/attribute/create', function () {
        return view('admin.attribute-create');
    });

    Route::get('/attribute/create', function () {
        return view('admin.attribute-create');
    });
    Route::get('/role', function () {
        return view('admin.role');
    });
    Route::get('/role/create', function () {
        return view('admin.role-create');
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
        Route::post('/', [UserController::class, 'store']);
        Route::put('/', [UserController::class, 'update']);
        Route::get('/{user}/delete', [UserController::class, 'destroy']);
    });
});
