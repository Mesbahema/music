<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profile
 *
 * @package App\Models\User
 *
 * @property string   $user_name
 * @property string   $last_name
 * @property string   $national_code
 *
 * @property Carbon   $birthday
 * @property User     $user
 *
 */

class Profile extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user' => 'datetime',
    ];
    /*-----------------------------Relations-----------------------*/


    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
