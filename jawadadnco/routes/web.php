<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect('/fr');
});

Route::group([
    'prefix' => '{locale}',
    'middleware' => 'locale',
    'where' => ['locale' => 'fr|en|nl'],
], function () {

    Route::get('/', function () {
        return view('layouts/home');
    })->name('home');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::get('/services', function () {
    return view('layouts/services');
});

Route::get('/fleet', function () {
    return view('layouts/fleet');
});

Route::get('/booking', function () {
    return view('layouts/booking');
});

Route::get('/pricing', function () {
    return view('layouts/pricing');
});

Route::get('/about', function () {
    return view('layouts/about');
});

Route::get('/contact', function () {
    return view('layouts/contact');
});

Route::post('/theme/toggle', function (Request $request) {
    $current = $request->cookie('theme', 'light');
    $next = $current === 'dark' ? 'light' : 'dark';

    return response()->noContent()->withCookie(cookie(
        name: 'theme',
        value: $next,
        minutes: 60 * 24 * 365,
        path: '/',
        domain: null,
        secure: $request->isSecure(),
        httpOnly: false,  // on veut pouvoir lire en JS (optionnel)
        raw: false,
        sameSite: 'lax'
    ));
})->name('theme.toggle');
