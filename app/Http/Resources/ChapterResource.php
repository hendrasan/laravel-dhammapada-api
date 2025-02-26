<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChapterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'number'        => $this->number,
            'title'         => $this->title,
            'english_title' => $this->english_title,
            'verses_count'  => $this->verses_count,
            'verses'        => $this->when($this->resource->relationLoaded('verses'), function () {
                return VerseResource::collection($this->verses);
            }),
        ];
    }
}
