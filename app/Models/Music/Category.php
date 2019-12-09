<?php

namespace App\Models\Music;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * Class Category
 *
 * @package App\Models\Music
 *
 * @property string  $name
 * @property Songs[] $songs
 *
 */

class Category extends Model
{
    /*-----------------------------Translations-----------------------*/
    use HasTranslations;
    public $translatable = ['name'];
    /*-----------------------------Relations-----------------------*/


    public function songs()
    {
      return $this->belongsToMany(Song::class);
    }
}
