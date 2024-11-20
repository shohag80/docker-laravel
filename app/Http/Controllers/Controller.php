<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function responseWithSuccess($data, $status_code)
    {
        return response()->json([
            'status' => $status_code,
            'data' => $data,
            'message' => 'Congratulation! Data fatch Successfully.',
        ]);
    }

    public function responseWithError($data, $status_code)
    {
        return response()->json([
            'status' => $status_code,
            'data' => $data,
            'message' => 'Sorry, No data found!',
        ]);
    }
}
