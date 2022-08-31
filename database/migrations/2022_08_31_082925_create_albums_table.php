<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('year');
            $table->unsignedBigInteger('artist_id');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
        });
    }

    // php artisan make:factory AlbumFactory --model=Album
       // Album::factory()->count(3)->create()

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
};
