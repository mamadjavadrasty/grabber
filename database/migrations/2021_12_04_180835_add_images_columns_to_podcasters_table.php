<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagesColumnsToPodcastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('podcasters', function (Blueprint $table) {
            $table->text('artwork_url30')->nullable()->after('artist_link_url');
            $table->text('artwork_url60')->nullable()->after('artist_link_url');
            $table->text('artwork_url100')->nullable()->after('artist_link_url');
            $table->text('artwork_url_600')->nullable()->after('artist_link_url');
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
            $table->dropColumn('artwork_url30');
            $table->dropColumn('artwork_url60');
            $table->dropColumn('artwork_url100');
            $table->dropColumn('artwork_url_600');
        });
    }
}
