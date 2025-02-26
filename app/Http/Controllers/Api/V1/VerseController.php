<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Verse;
use Illuminate\Http\Request;

class VerseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Verse::paginate(20), 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Verse $verse)
    {
        return response()->json($verse, 200);
    }
}
