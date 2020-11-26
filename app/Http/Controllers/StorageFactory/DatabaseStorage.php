<?php

namespace App\Http\Controllers\StorageFactory;

use App\Models\Feedback;

class DatabaseStorage implements Storage
{
    public function save($name, $phone, $message)
    {
        $obj = Feedback::create([
            'name' =>$name,
            'phone' => $phone,
            'message' => $message
        ]);
        $obj->save();
    }

}
