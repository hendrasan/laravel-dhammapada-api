<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Chapter::all(), 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Chapter $chapter)
    {
        return response()->json($chapter, 200);
    }
}
