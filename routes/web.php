<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CompanySettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\TreatementController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();


Route::view('/home', 'home')->name('home');
Route::view('/store', 'store')->name('store');
Route::view('/appointment', 'appointment')->name('appointment');
Route::view('/products', 'products')->name('products');
Route::view('/cart', 'cart')->name('cart');

Route::get('/products', [ProductController::class, 'show'])->name('products');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::post('/delete-from-cart', [CartController::class, 'deleteFromCart'])->name('deleteFromCart');
Route::get('/cart-item-count', [CartController::class, 'getItemCount'])->name('cartItemCount');

Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('clearCart');

Route::get('lang/home', [LangController::class,'index']);
Route::get('lang/change', [LangController::class,'change'])->name('changeLang');


// Authentication Routes
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');


// Password Reset Routes
Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');

// Route::resource('customer', CustomerController::class);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

// Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

// customer module
Route::resource('customer', CustomerController::class);
Route::get('/allcustomers', [CustomerController::class,'index'])->name('allcustomers');
Route::get('/createCustomer', [CustomerController::class, 'create'])->name('createcustomer');
Route::post('/storeCustomer', [CustomerController::class, 'store'])->name('storecustomer');
Route::post('/verifyCustomer', [CustomerController::class, 'verify'])->name('verifycustomer');
Route::get('/editCustomer/{id}', [CustomerController::class, 'edit'])->name('editcustomer');
Route::post('/updateCustomer', [CustomerController::class, 'update'])->name('updatecustomer');
Route::delete('/deleteCustomer/{id}', [CustomerController::class, 'destroy'])->name('deletecustomer');


Route::get('/treatement', [App\Http\Controllers\TreatementController::class, 'index'])->name('treatement');

// Route::resource('Treatement', TreatementController::class);
use Stichoza\GoogleTranslate\GoogleTranslate;


// supplier module
Route::resource('supplier', SupplierController::class);
Route::get('/allsuppliers', [SupplierController::class,'index'])->name('allsuppliers');
Route::get('/createSupplier', [SupplierController::class, 'create'])->name('createsupplier');
Route::post('/storeSupplier', [SupplierController::class, 'store'])->name('storesupplier');
Route::get('/editSupplier/{id}', [SupplierController::class, 'edit'])->name('editsupplier');
Route::post('/updateSupplier', [SupplierController::class, 'update'])->name('updatesupplier');



// Item module
Route::resource('item', ItemController::class);
Route::get('/items', [ItemController::class, 'index'])->name('item.index'); 
Route::get('/items/create', [ItemController::class, 'create'])->name('createitem'); 
Route::post('/items', [ItemController::class, 'store'])->name('items.store'); 
Route::get('/get-supplier-codes', [ItemController::class, 'getSupplierCodes']);
Route::get('/editItem/{id}', [ItemController::class, 'edit'])->name('edititem');
Route::put('/updateItem/{id}', [ItemController::class, 'update'])->name('updateitem');


//Purchase module
Route::resource('purchase', PurchaseController::class)->except(['show']);
Route::get('/purchase/order-create', [PurchaseController::class, 'create'])->name('createPurchaseOrder');
Route::get('/allpurchaseRequests', [PurchaseController::class, 'index'])->name('purchase.purchaseOrder');
Route::delete('/purchase/{purchase}', [PurchaseController::class, 'destroy'])->name('purchase.destroy');
Route::get('/purchase/get-items-by-supplier', [PurchaseController::class, 'getItemsBySupplier'])->name('get-items-by-supplier');
Route::post('/purchase/store', [PurchaseController::class, 'store'])->name('purchase.store');
Route::get('purchase/{request_code}', [PurchaseController::class, 'show'])->name('purchase.show');


//Settings module
Route::get('company-settings', [CompanySettingController::class, 'index'])->name('company.index');
Route::post('company-settings', [CompanySettingController::class, 'store'])->name('company.store');

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::post('/users/add-user', [UserController::class, 'store'])->name('user.store');






?>


