<?php

namespace App\Repositories\Music;

use Illuminate\Database\Eloquent\Model;

interface SongRepositoryInterface
{
    public function getSong(int $id);
}
