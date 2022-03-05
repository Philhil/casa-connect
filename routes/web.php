<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Profile;
use App\Http\Controllers\GoogleV3CaptchaController;


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


Route::get('/impressum', function () {
    return view('legal.impressum');
})->name('impressum');

Route::get('/datenschutz', function () {
    return view('legal.datenschutz');
})->name('datenschutz');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//AUTH start
Auth::routes();

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect(RouteServiceProvider::HOME);
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::middleware('auth')->group(function () {
    Route::post('logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
//AUTH end

//Recaptcha start
Route::get('google-v3-recaptcha', [GoogleV3CaptchaController::class, 'index']);
Route::post('validate-g-recaptcha', [GoogleV3CaptchaController::class, 'validateGCaptch']);
//Recaptcha end

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/offer/{offer}', \App\Http\Livewire\OfferShow::class)->name('offer.show');
Route::post('/offer/contact', [\App\Http\Controllers\OfferController::class, 'contact'])->name('offer.contact');

Route::middleware('auth')->group(function () {

    //prfile routes
    Route::get('/profile', Profile::class)->name('profile');
    //Route::get('/profile/edit/picture',  [\App\Http\Controllers\ProfileController::class, 'editinformation'])->name('profile.information');
    //Route::post('/profile/edit/settings', [\App\Http\Controllers\ProfileController::class, 'updateinformation']);
    //Route::get('/profile/edit//description',  [\App\Http\Controllers\ProfileController::class, 'editpicture'])->name('profile.picture');

    //offer
    Route::get('/offercreate', \App\Http\Livewire\OfferCreate::class)->name('offer.create');
    Route::post('/offer', [\App\Http\Controllers\OfferController::class, 'store'])->name('offer.store');
    Route::get('/myoffers', \App\Http\Livewire\MyOffers::class)->name('myoffers');
    Route::get('/offer/{offer}/remove', [\App\Http\Controllers\OfferController::class, 'destroy'])->name('offer.delete');
    //Route::get('/offer/{offer}/edit', \App\Http\Livewire\OfferEdit::class)->name('offer.edit');
});

//axio Routes where auth is necessary
Route::middleware('auth')->group(function () {
    Route::get('/api/myoffer', function (Request $request) {
        $data = \App\Models\Offer::where('user_id', Auth::user()->id)->orderBy('id')->with('user')->paginate(10);
        return $data->toJson();
    });
});

