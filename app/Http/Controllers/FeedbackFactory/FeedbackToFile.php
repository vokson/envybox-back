<?php

namespace App\Http\Controllers\FeedbackFactory;

use App\Http\Controllers\StorageFactory\FileStorage;
use App\Http\Controllers\StorageFactory\Storage;

class FeedbackToFile extends Feedback
{
    public function getStorage() : Storage {
        return new FileStorage();
    }
}
