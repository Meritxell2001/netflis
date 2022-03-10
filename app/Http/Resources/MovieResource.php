<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'year' => $this->year,
            'sinopsis' => $this->sinopsis,
            'duration' => $this->duration,
            'type' => $this->type,
            'file' => $this->file,
            'size' => $this->size,
            'cover' => $this->cover,
            'season' => $this->season,
            'chapter' => $this->chapter
        ];
    }
}
