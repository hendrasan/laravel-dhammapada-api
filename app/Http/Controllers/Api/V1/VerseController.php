<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\VerseCollection;
use App\Http\Resources\VerseResource;
use App\Models\Verse;
use Illuminate\Http\Request;

class VerseController extends Controller
{
    /**
     * Display a listing of the verse.
     */
    public function index()
    {
        return new VerseCollection(Verse::with('chapter')->paginate(20));
    }

    /**
     * Display the specified verse.
     */
    public function show(Verse $verse)
    {
        return new VerseResource($verse->load('chapter'));
    }

    /**
     * Display a random verse.
     */
    public function random()
    {
        return new VerseResource(Verse::with('chapter')->inRandomOrder()->first());
    }
}
