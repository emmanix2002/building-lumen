<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    public function home(): JsonResponse
    {
        return response()->json([
            'message' => 'A sample calculator API project'
        ]);
    }
}
