<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ChapterCollection;
use App\Http\Resources\ChapterResource;
use App\Models\Chapter;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ChapterCollection(Chapter::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Chapter $chapter)
    {
        return new ChapterResource($chapter->load('verses'));
    }
}
