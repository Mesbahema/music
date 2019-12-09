<?php

namespace App\Models\Music;

use App\Models\Like\Subscribe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

/**
 * Class Artist
 *
 * @package App\Models\Music
 *
 * @property string      $nickname
 * @property string      $biography
 * @property Subscribe[] $subscribe
 * @property Song[]      $song
 * @property \DateTime   $birthday
 *
 */

class Artist extends Model
{
    protected $fillable = [
        'biography', 'birthday'
    ];
    /*-----------------------------Translations-----------------------*/
    use HasTranslations, SoftDeletes;
    public $translatable = ['nickname'];
    /*-----------------------------Relations-----------------------*/

    public function subscribes()
    {
      return $this->hasMany(Subscribe::class);
    }

    public function songs()
    {
      return $this->belongsToMany(Song::class);
    }
    /*--------------------------Casts---------------------------*/
    protected $casts = [
        'birthday' => 'datetime',
    ];
}
