<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Livewire\AboutUs;
use App\Livewire\AdminDashboard;
use App\Livewire\Cart;
use App\Livewire\Checkout\Checkout;
use App\Livewire\Checkout\Verify;
use App\Livewire\Home;
use App\Livewire\ProductCategory;
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
use App\Livewire\ProductDetails;
use App\Livewire\StoreManagement\Products\Reviews;
use App\Livewire\Support\CreateTicket;
use App\Livewire\Support\ShowTicket;
use App\Livewire\Support\Tickets;
use App\Livewire\Support\UpdateTicket;
use App\Livewire\User\Orders;
use App\Livewire\User\Profile;
use App\Livewire\User\Dashboard;
use App\Livewire\User\OrderDetails;
use App\Livewire\Users;
use App\Models\File;
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

Route::get('/', Home::class)->name('home');
Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/products', Store::class)->name('products');
Route::get('/products/3drgb-product-{product}', ProductDetails::class)->name('products.show');
Route::get('/product-category/{categories}', ProductCategory::class)
    ->where('categories', '.*')
    ->name('product-categories');
Route::get('/cart', Cart::class)->name('cart');
Route::get('/checkout', Checkout::class)->name('checkout');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::middleware('admin')->prefix('admin')->group(function () {

        Route::get('/dashboard', AdminDashboard::class)->name('admin.dashboard');

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

        Route::get('/reviews', Reviews::class)->name('reviews');

        Route::get('/users', Users::class)->name('users');
    });

    Route::get('/verify', Verify::class)->name('verify');

    Route::as('user.')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
        Route::get('/orders', Orders::class)->name('orders');
        Route::get('/orders/{order}', OrderDetails::class)->name('orders.show');
        Route::get('/profile', Profile::class)->name('profile');
    });

    Route::prefix('tickets')->name('tickets.')->group(function () {
        Route::get('/', Tickets::class)->name('index');
        Route::get('/create', CreateTicket::class)->name('create');
        Route::get('/{ticket}', ShowTicket::class)->name('show');
        Route::get('/{ticket}/edit', UpdateTicket::class)->name('edit');
    });
});

Route::middleware('guest')->prefix('auth')->group(function () {
    Route::get('/register', RegisterController::class)->name('register');
    Route::get('/redirect', [LoginController::class, 'redirect'])->name('login');
    Route::get('/callback', [LoginController::class, 'callback'])->name('callback');
});

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/download/{file}', function (Request $request, File $file) {
    return response()->download(storage_path("app/{$file->path}"), $file->name);
})->middleware('signed')->name('files.download');
