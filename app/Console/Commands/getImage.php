<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class getImage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'download:image';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'shiri do,\'t have charger';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //$this->argument('kind');
        $this->choice('Do you want mp3 or image', [
            'mp3',
            'images'
        ], 'images');
        //file_put_contents(storage_path('app/public/'),file_get_contents('https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwifg9WClKjmAhUHcBQKHYMYAzQQjRx6BAgBEAQ&url=https%3A%2F%2Fwww.pexels.com%2Fsearch%2Fbeauty%2F&psig=AOvVaw2Txlti94Rd2RJsInf2CPyW&ust=1575966810662158'));
        file_put_contents(storage_path('app/public/phoca_thumb_l_4h.jpg'), file_get_contents('http://www.hajij.com/fa/images/phocagallery/mashar/thumbs/phoca_thumb_l_4h.jpg'));
    }
}
