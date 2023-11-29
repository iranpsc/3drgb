<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Store;
use App\Livewire\StoreManagement\Attributes;
use App\Livewire\StoreManagement\Categories\Categories;
use App\Livewire\StoreManagement\Categories\CreateCategory;
use App\Livewire\StoreManagement\Categories\EditCategory;
use App\Livewire\StoreManagement\Tags;
use App\Livewire\StoreManagement\Products\CreateProduct;
use App\Livewire\StoreManagement\Products\EditProduct;
use App\Livewire\StoreManagement\Products\Import;
use App\Livewire\StoreManagement\Products\Products;
use Illuminate\Http\Request;
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

Route::view('/', 'home', ['title' => 'خانه'])->name('home');
Route::get('/store', Store::class)->name('store');

Route::middleware('auth')->group(function () {
    Route::middleware('admin')->prefix('admin')->group(function () {

        Route::prefix('products')->name('products.')->group(function () {
            Route::get('/', Products::class)->name('index');
            Route::get('/create', CreateProduct::class)->name('create');
            Route::get('/{product}/edit', EditProduct::class)->name('edit');
            Route::get('/import', Import::class)->name('import');
        });

        Route::prefix('categories')->name('categories.')->group(function () {
            Route::get('/', Categories::class)->name('index');
            Route::get('/create', CreateCategory::class)->name('create');
            Route::get('/{category}/edit', EditCategory::class)->name('edit');
        });

        Route::get('/tags', Tags::class)->name('tags');

        Route::get('/attributes', Attributes::class)->name('attributes');
    });
});

Route::middleware('guest')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

Route::post('/logout', function (Request $request) {
    auth()->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
})->middleware('auth')->name('logout');
