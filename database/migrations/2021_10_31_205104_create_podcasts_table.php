<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcasts', function (Blueprint $table) {
            $table->id();
            $table->string('wrapper_type');
            $table->string('kind');
            $table->BigInteger('artist_id')->nullable();
            $table->bigInteger('collection_id')->nullable();;
            $table->BigInteger('track_id')->nullable();;
            $table->text('artist_name')->nullable();
            $table->text('collection_name');
            $table->text('track_name');
            $table->text('collection_censored_name');
            $table->text('track_censored_name');
            $table->text('artist_view_url')->nullable();
            $table->text('collection_view_url')->nullable();
            $table->text('feed_url')->nullable();
            $table->text('track_view_url')->nullable();
            $table->text('artwork_url30')->nullable();;
            $table->text('artwork_url60')->nullable();;
            $table->text('artwork_url100')->nullable();;
            $table->text('artwork_url_3000')->nullable();
            $table->string('collection_price')->nullable();
            $table->string('track_price')->nullable();
            $table->string('track_rental_price')->nullable();
            $table->string('collection_hd_price')->nullable();
            $table->string('track_hd_price')->nullable();
            $table->string('track_hd_rental_price')->nullable();
            $table->timestamp('release_date');
            $table->string('collection_explicitness');
            $table->string('track_explicitness');
            $table->bigInteger('track_count')->nullable();
            $table->string('country')->nullable();
            $table->string('currency')->nullable();
            $table->string('primary_genre_name')->nullable();
            $table->string('content_advisory_rating')->nullable();
            $table->text('artwork_url_600')->nullable();
            $table->json('genre_ids')->nullable();
            $table->json('genres')->nullable();
            $table->uuid('uuid')->nullable();
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
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
        Schema::dropIfExists('podcasts');
    }
}
