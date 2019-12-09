<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicvideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicvideos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file_path', 1000);

            $table->bigInteger('song_id')
                  ->unsigned();
            $table->foreign('song_id')
                  ->references('id')
                  ->on('songs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musicvideos');
    }
}
