<?php

namespace App\Http\Controllers\FeedbackFactory;

use App\Http\Controllers\Controller;
use App\Http\Controllers\StorageFactory\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;

abstract class Feedback extends Controller
{
    abstract public function getStorage() : Storage;

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|digits:10',
            'text' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $validatedData = $validator->validated();

        try {
            $this->getStorage()->save(
                $validatedData['name'],
                $validatedData['phone'],
                $validatedData['text']
            );
            return response()->noContent();

        } catch (Exception $e) {
            return response()->json(['errors' => $e->getMessage()], 500);
        }

    }
}
