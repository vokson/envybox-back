<?php

namespace App\Http\Controllers\FeedbackFactory;

use App\Http\Controllers\StorageFactory\DatabaseStorage;
use App\Http\Controllers\StorageFactory\Storage;

class FeedbackToDatabase extends Feedback
{
    public function getStorage() : Storage {
        return new DatabaseStorage();
    }
}
