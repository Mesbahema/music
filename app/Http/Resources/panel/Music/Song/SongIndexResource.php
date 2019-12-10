<?php

namespace App\Http\Resources\panel\Music\Song;

use Illuminate\Http\Resources\Json\JsonResource;

class SongIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->arr = [
            'id'        => $this->id,
            'name'      => $this->getTranslations('name'),
            'duration' => $this->duration,
            'birthday'  => $this->birthday,
        ];
        return $this->arr;
    }
}
