<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcasters', function (Blueprint $table) {
            $table->id();
            $table->string('wrapper_type')->nullable();
            $table->string('artist_type')->nullable();
            $table->string("artist_name");
            $table->text('artist_link_url')->nullable();
            $table->bigInteger('artist_id')->nullable();
            $table->text('artwork_url30');
            $table->text('artwork_url60');
            $table->text('artwork_url100');
            $table->text('artwork_url_600');
            $table->string('primary_genre_name')->nullable();
            $table->bigInteger('primary_genre_id')->nullable();
            $table->tinyInteger('isset_artist_id')->nullable();
            $table->uuid('uuid')->nullable();
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
        Schema::dropIfExists('podcasters');
    }
}
