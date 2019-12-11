<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {

    }

    public function show($id)
    {
        return resolve('App\Repositories\Music\SongRepositoryInterface')
            ->getSong($id);
    }
}
