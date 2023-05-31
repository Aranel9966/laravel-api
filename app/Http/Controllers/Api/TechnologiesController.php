<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologiesController extends Controller
{
    public function index()
    {
        $technology = Technology::paginate(1);

        return response()->json([
            'success' => true,
            'results' => $technology
        ]);
    }
}
