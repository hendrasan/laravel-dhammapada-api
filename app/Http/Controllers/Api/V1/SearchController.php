<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ChapterCollection;
use App\Http\Resources\VerseCollection;
use App\Models\Chapter;
use App\Models\Verse;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->query('q');

        if (!$q) {
            return response()->json([
                'message' => 'Query parameter "q" is required'
            ], 400);
        }

        $chapters = Chapter::where('title', 'ilike', "%$q%")
            ->orWhere('english_title', 'ilike', "%$q%")
            ->get();

        $verses = Verse::where('text', 'ilike', "%$q%")
            ->orWhere('english_text', 'ilike', "%$q%")
            ->orWhere('story_title', 'ilike', "%$q%")
            ->orWhere('english_story_title', 'ilike', "%$q%")
            ->orWhere('story', 'ilike', "%$q%")
            ->orWhere('english_story', 'ilike', "%$q%")
            ->get();

        return response()->json([
            'data' => [
                'chapters' => new ChapterCollection($chapters),
                'verses' => new VerseCollection($verses),
            ]
        ]);
    }
}
