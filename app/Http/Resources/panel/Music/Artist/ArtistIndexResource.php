<?php

namespace App\Http\Resources\panel\Music\Artist;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Music\Artist;

/**
 * @mixin Artist
 */
class ArtistIndexResource extends JsonResource
{
    private $arr;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return array
     *
     */
    public function toArray($request)
    {
        $this->arr = [
            'id'        => $this->id,
            'name'      => $this->getTranslations('nickname'),
            'biography' => $this->biography,
            'birthday'  => $this->birthday,
        ];

        return $this->arr;
    }
}
