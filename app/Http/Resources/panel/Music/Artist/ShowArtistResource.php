<?php

namespace App\Http\Resources\panel\Music\Artist;

use App\Models\Music\Artist;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class ShowArtistResource
 *
 * @package App\Http\Resources\panel\Music\Artist
 * @mixin Artist
 */
class ShowArtistResource extends JsonResource
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
            'name'      => $this->nickname,
            'biography' => $this->biography,
            'birthday'  => $this->birthday,
        ];
        return $this->arr;
    }
}
