<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect('/fr');
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
Route::get('/{locale}/services', function () {
    return view('layouts/services');
})
->where(['locale' => 'fr|nl|en'])
->middleware('setlocale');

Route::get('/{locale}/fleet', function () {
    return view('layouts/fleet');
})
->where(['locale' => 'fr|nl|en'])
->middleware('setlocale');

Route::get('/{locale}/booking', function () {
    return view('layouts/booking');
})
->where(['locale' => 'fr|nl|en'])
->middleware('setlocale');

Route::get('/{locale}/pricing', function () {
    return view('layouts/pricing');
})
->where(['locale' => 'fr|nl|en'])
->middleware('setlocale');

Route::get('/{locale}/about', function () {
    return view('layouts/about');
})
->where(['locale' => 'fr|nl|en'])
->middleware('setlocale');

Route::get('/{locale}/contact', function () {
    return view('layouts/contact');
})
->where(['locale' => 'fr|nl|en'])
->middleware('setlocale');

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
        httpOnly: false,
        raw: false,
        sameSite: 'lax'
    ));
})->name('theme.toggle');

Route::redirect('/', '/en');

Route::prefix('{locale}')
  ->where(['locale' => 'fr|en'])
  ->middleware('setlocale')
  ->group(function () {

    Route::get('/', function () {
      return view('layouts/home');
    })->name('home');

  });
