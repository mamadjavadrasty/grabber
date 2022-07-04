<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIssetArtistIdToPodcastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('podcasters', function (Blueprint $table) {
            $table->boolean('isset_artist_id')->after('primary_genre_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('podcasters', function (Blueprint $table) {
            $table->removeColumn('isset_artist_id');
        });
    }
}
