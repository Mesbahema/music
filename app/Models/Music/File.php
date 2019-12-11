<?php

namespace App\Models\Music;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'file_path',
    ];
    /*-----------------------------Relations-----------------------*/
    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }
    public function musicvideo()
    {
        return $this->belongsToMany(Musicvideo::class);
    }
}
