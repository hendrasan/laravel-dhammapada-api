<?php

use App\Http\Controllers\Api\V1\ChapterController;
use App\Http\Controllers\Api\V1\VerseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::get('/chapters', [ChapterController::class, 'index']);
    Route::get('/chapters/{chapter}', [ChapterController::class, 'show']);

    Route::get('/verses', [VerseController::class, 'index']);
    Route::get('/verses/{verse}', [VerseController::class, 'show']);
});