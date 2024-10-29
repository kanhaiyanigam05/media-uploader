<?php

use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('media');
});
Route::post('upload/url', [MediaController::class, 'uploadUrl'])->name('media.upload.url');
Route::resource('media', MediaController::class);
