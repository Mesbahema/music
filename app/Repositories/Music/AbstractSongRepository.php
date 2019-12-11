<?php

namespace App\Repositories\Music;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractSongRepository extends Model
{
    protected function getSongCacheKey($id)
    {
        return "song_{$id}";
    }
}
