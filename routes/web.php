<?php

use App\Livewire\Pages\{
    AboutUs,
    CartView,
    Checkout,
    ContactUs,
    EmptyCart,
    Home,
    OrderComplete,
    ProductPageDetails,
    ShopList
};
use App\Livewire\Pages\Auth\{
    EmailVerify,
    Login,
    MyAccount,
    Register
};
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class);
Route::get('/about-us', AboutUs::class);
Route::get('/shop-list', ShopList::class);
Route::get('/login', Login::class);
Route::get('/register', Register::class);
Route::get('/contact-us', ContactUs::class);
Route::get('/email-verify/{token}', EmailVerify::class);
Route::get('/logout', [Login::class, 'logout']);
Route::get('/product/{id}', ProductPageDetails::class);
Route::get('/checkout', Checkout::class);
Route::get('/view-cart', CartView::class);
Route::get('/order-completed/{tracker_id}', OrderComplete::class);
Route::get('/empty-cart', EmptyCart::class);
Route::get('/my-account', MyAccount::class);
