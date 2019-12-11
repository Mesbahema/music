<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file_path', 1000);
            $table->timestamps();
        });
        Schema::create('file_song', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('file_id')
                  ->unsigned();
            $table->foreign('file_id')
                  ->references('id')
                  ->on('files')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->bigInteger('song_id')
                  ->unsigned();
            $table->foreign('song_id')
                  ->references('id')
                  ->on('songs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->timestamps();
            });
        Schema::create('file_musicvideo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('file_id')
                  ->unsigned();
            $table->foreign('file_id')
                  ->references('id')
                  ->on('files')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->bigInteger('musicvideo_id')
                  ->unsigned();
            $table->foreign('musicvideo_id')
                  ->references('id')
                  ->on('musicvideos')
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
        Schema::dropIfExists('files');
        Schema::dropIfExists('file_song');
        Schema::dropIfExists('file_song');
    }
}
