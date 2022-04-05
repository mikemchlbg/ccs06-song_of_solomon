<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/chapter/{chapter_number}', [SongController::class, 'readByChapter']);
Route::get('/all-chapters', [SongController::class, 'readAll']);
