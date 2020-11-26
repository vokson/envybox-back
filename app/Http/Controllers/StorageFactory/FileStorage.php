<?php

namespace App\Http\Controllers\StorageFactory;

use Illuminate\Support\Facades\Storage as CommonStorage;

class FileStorage implements Storage
{
    private $filename = 'feedback.json';

    public function save($name, $phone, $message) {

        $arr = [];
        if (CommonStorage::exists($this->filename)) {
            $contents = CommonStorage::get($this->filename);
            $arr = json_decode($contents, true);
        }

        $new = [
            'name' => $name,
            'phone' => $phone,
            'text' => $message
        ];

        $arr[] = $new;
        $json = json_encode($arr);

        CommonStorage::put($this->filename, $json);
    }
}
