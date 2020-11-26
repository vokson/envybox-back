<?php

namespace App\Http\Controllers\StorageFactory;

interface Storage
{
    public function save($name, $phone, $message);
}
