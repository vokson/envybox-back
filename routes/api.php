<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackFactory\FeedbackToFile;

Route::post('/feedback', [FeedbackToFile::class, 'add']);
