<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VerseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'chapter_id' => $this->chapter_id,
            'verse_number' => $this->verse_number,
            'text' => $this->text,
            'english_text' => $this->english_text,
            'story_title' => $this->story_title,
            'english_story_title' => $this->english_story_title,
            'story' => $this->story,
            'english_story' => $this->english_story,
            'chapter'        => $this->when($this->resource->relationLoaded('chapter'), function () {
                return new ChapterResource($this->chapter);
            }),
        ];
    }
}
