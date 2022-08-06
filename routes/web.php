<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/card', function () {
  return view('card.index');
});

Route::get('/', [HomeController::class, 'index']);
