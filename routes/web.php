<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ListingController;
use App\Http\Livewire\Categories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/packs', function () {
	return view('packs.list');
})->name('packs');

Route::get('/sysinfo', function () {
	return phpinfo();
});

Route::get('/listings/show/{id}', [ListingController::class, 'show'])->name('listings.show');
Route::any('/listings/step1', [ListingController::class, 'annonceStep1'])->name('listings.annonceStep1');
Route::any('/listings/step2', [ListingController::class, 'annonceStep2'])->name('listings.annonceStep2');
Route::post('/listings/store', [ListingController::class, 'store'])->name('listings.store');

Route::group(['middleware' => 'auth'], function () {

	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');
	
	//Route::view('categories', 'livewire.categories.index')->name('categories');
	//Route::get('category/create', Categories::class );

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');

	Route::resource('categories', App\Http\Controllers\CategoryController::class);
	Route::resource('listings', App\Http\Controllers\ListingController::class)->except(['store']);
});

Route::group(['middleware' => ['can:approve listing', 'can:disapprove listing']], function () {
	Route::resource('payments', App\Http\Controllers\PaymentsController::class);

	Route::get('/listings/{id}/approve', [ListingController::class, 'approve'])->name('listings.approve');
	Route::get('/listings/{id}/disapprove', [ListingController::class, 'disapprove'])->name('listings.disapprove');
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');
