<?php

use App\Http\Controllers\HomeController;
use App\Livewire\AboutUs;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Validation\Rules\Password as RulesPassword;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Cart;
use App\Livewire\Checkout\Checkout;
use App\Livewire\Checkout\Verify;
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
use App\Livewire\Support\CreateTicket;
use App\Livewire\Support\ShowTicket;
use App\Livewire\Support\Tickets;
use App\Livewire\Support\UpdateTicket;
use App\Livewire\User\Orders;
use App\Livewire\User\Profile;
use App\Livewire\User\ChangePassword;
use App\Livewire\User\Dashboard;
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

Route::get('/', HomeController::class)->name('home');
Route::get('/about-us', AboutUs::class)->name('about-us');
Route::get('/store', Store::class)->name('store');
Route::get('/products/{product:name}', ProductDetails::class)->name('products.show');
Route::get('/cart', Cart::class)->name('cart');
Route::get('/checkout', Checkout::class)->name('checkout');

Route::middleware(['auth', 'verified'])->group(function () {
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

    Route::get('/verify', Verify::class)->name('verify');

    Route::as('user.')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
        Route::get('/orders', Orders::class)->name('orders');
        Route::get('/profile', Profile::class)->name('profile');
        Route::get('/change-password', ChangePassword::class)->name('change-password');
    });

    Route::prefix('tickets')->name('tickets.')->group(function () {
        Route::get('/', Tickets::class)->name('index');
        Route::get('/create', CreateTicket::class)->name('create');
        Route::get('/{ticket}', ShowTicket::class)->name('show');
        Route::get('/{ticket}/edit', UpdateTicket::class)->name('edit');
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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return to_route('user.dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'ایمیل تایید حساب کاربری برای شما ارسال شد.');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => ['required', 'confirmed', RulesPassword::min(6)->mixedCase()],
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
