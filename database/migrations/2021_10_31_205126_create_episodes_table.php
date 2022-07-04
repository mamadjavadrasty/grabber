<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->text('artwork_url_160')->nullable();
            $table->string('episode_file_extension')->nullable();
            $table->string('episode_content_type')->nullable();
            $table->text('artwork_url_60')->nullable();
            $table->text('artist_view_url')->nullable();
            $table->string('content_advisory_rating')->nullable();
            $table->text('track_view_url')->nullable();
            $table->text('artwork_url_600')->nullable();
            $table->text('preview_url')->nullable();
            $table->bigInteger('track_time_millis')->nullable();
            $table->text('collection_view_url')->nullable();
            $table->text('episode_url')->nullable();
            $table->json('artist_ids')->nullable();
            $table->string('closed_captioning')->nullable();
            $table->timestamp('release_date')->nullable();
            $table->bigInteger('track_id')->nullable();
            $table->text('track_name')->nullable();
            $table->mediumText('short_description')->nullable();
            $table->text('feed_url')->nullable()->nullable();
            $table->bigInteger('collection_id')->nullable();
            $table->text('collection_name')->nullable();
            $table->string('kind')->nullable();
            $table->string('wrapper_type')->nullable();
            $table->string('country')->nullable();
            $table->longText('description')->nullable();
            $table->json('genres')->nullable();
            $table->text('episode_guid')->nullable();
            $table->foreignId('podcast_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('podcaster_id')->nullable()->constrained()->onDelete('set null');
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
        Schema::dropIfExists('episodes');
    }
}
