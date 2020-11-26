<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackFactory\FeedbackToFile;
use App\Http\Controllers\FeedbackFactory\FeedbackToDatabase;

// Вариант с файлом
//Route::post('/feedback', [FeedbackToFile::class, 'add']);

// Вариант с SQLite
Route::post('/feedback', [FeedbackToDatabase::class, 'add']);
