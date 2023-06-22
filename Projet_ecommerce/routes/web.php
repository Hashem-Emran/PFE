<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
// AUTH
use App\Http\Controllers\Auth\AuthController;

// RESET PWD
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

// ADMIN
Route::get('Admin', [MasterController::class, 'adminview'])->name('adminview');

// LOGIN
Route::get('login', [AuthController::class, 'index'])->name('login')->middleware(['guest']);
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post')->middleware(['guest']);
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('client', [AuthController::class, 'clientview'])->name('clientview');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// RESET
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');



//profile client 
// Route::get('/profille', [ProfileController::class, 'prof']);
// Route::poat('/profille/update', [ProfileController::class, 'UpdateClient']);

// Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
// Route::put('/profile', 'ProfileController@update')->name('profile.update');



//Route checkout 

Route::get('/checkout',function(){
    return view('products.checkout');
})->name('check');

//User
Route::get('/User',function(){
    return view('products.Cl'); 
})->name('User');





// Gestion Categories ProC
// Route::get('/categories/{id}', [MasterController::class, 'Prod'])->name('ProC');
Route::get('/categorie/{id}', [MasterController::class, 'Prod'])->name('cat.show');
Route::get('/Admin/GestionCategories', [MasterController::class, 'gestionCat'])->name("gestioncategories");

Route::get('/', [MasterController::class, 'slash'])->name("home");
// Route::get('/cate', [MasterController::class, 'cat'])->name("cate");


// GESTION (ALL)
Route::get('/Admin/{gestion}',  [MasterController::class, 'Gestion'])->name('gestion');


// EXPORT DATA EXCEL
Route::get('data', [MasterController::class, 'exportproduit'])->name('getdata');

// IMPORT DATA CSV
Route::post('putdata', [MasterController::class, 'importproduits'])->name('putdata');

// CART GUEST
Route::get('atcg', [MasterController::class, 'addtocartguest'])->name('addtocartguest');

// ADD TO CART
Route::get('atc', [MasterController::class, 'addtocart'])->name('addtocart');

//Delete To CART
Route::get('Delete_Cart/{id}', [MasterController::class, 'Delete_Cart'])->name('delete');


// CLIENT PRODUCT
Route::get('client/products', [MasterController::class, 'cltproducts'])->name('cltproducts');

// CLIENT CART
Route::get('client/carts', [MasterController::class, 'cltcart'])->name('cltcart');

// PASS COMMANDE
Route::get('client/commande/', [MasterController::class, 'commande'])->name('commande');

//  COMMANDE  HISTORIE
Route::get('client/commandes', [MasterController::class, 'cltcommande'])->name('cltcommande');

// ANNULLER COMMANDE
Route::get('/client/annuler/{commande}',  [MasterController::class, 'annulercmd'])->name('annulercommande');

// FACTURES
Route::get('factures', [MasterController::class, 'generate'])->name('generate');
