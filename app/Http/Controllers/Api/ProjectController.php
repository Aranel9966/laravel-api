<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $project = Project::with('technologies', 'category')
            ->paginate(6);
        $formData = $request->all();

        if ($request->has('title') && $formData['title'] != "") {
            $project = Project::where('title', 'like', "%$formData[title]%")->get();
        }

        return response()->json([
            'success' => true,
            'results' => $project,
        ]);
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->with('category', 'technologies')->first();

        return response()->json([
            'success' => true,
            'results' => $project
        ]);
    }
}
