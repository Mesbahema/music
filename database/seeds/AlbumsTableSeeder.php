<?php

use App\Models\Music\Album;
use Illuminate\Database\Seeder;

/**
 * Class AlbumsTableSeeder
 * @mixin \App\Models\Music\Album
 */
class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $album = new Album();
        $album->setTranslation('name', 'en', 'Stone sour')
              ->setTranslation('name', 'fa', 'سوزش سنگ');
        $album->save();
    }
}
