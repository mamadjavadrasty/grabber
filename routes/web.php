<?php

use App\Http\Controllers\Web\Admin\AccountController;
use App\Http\Controllers\Web\Admin\AdminAuthController;
use App\Http\Controllers\Web\Admin\CategoryController;
use App\Http\Controllers\Web\Admin\CreateWithFeedController;
use App\Http\Controllers\Web\Admin\DashboardController;
use App\Http\Controllers\Web\Admin\EpisodeController;
use App\Http\Controllers\Web\Admin\FeedController;
use App\Http\Controllers\Web\Admin\NewPodcastSearchController;
use App\Http\Controllers\Web\Admin\PodcastController;
use App\Http\Controllers\Web\Admin\PodcasterController;
use App\Http\Controllers\Web\Admin\SettingController;
use App\Http\Controllers\Web\Admin\SyncPodcastController;
use App\Models\Episode;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['as' => 'admin.' , 'prefix' => env('ADMIN_PANEL')] , function()
{
    Route::middleware('admin')->group(function()
    {
        Route::get('/', [DashboardController::class,'index'])->name('dashboard');

        Route::get('new-podcast-search', [NewPodcastSearchController::class , 'newPodcastShow'])->name('new-podcast-search');
        // Route::get('new-podcast-search/show/{id}', [NewPodcastSearchController::class , 'newPodcastShowDetails'])->name('new-podcast-search.show');
        Route::get('/podcast-create/{collectionId}', [NewPodcastSearchController::class , 'newPodcastCreate'])->name('podcastCreate');

        Route::get('new-podcast-feed', [CreateWithFeedController::class , 'index'])->name('new-podcast-feed');
        Route::post('new-podcast-feed/create', [CreateWithFeedController::class , 'create'])->name('new-podcast-feed.create');

        Route::get('podcasts/sync',[SyncPodcastController::class,'index'])->name('podcast.sync');
        Route::post('podcasts/sync/store',[SyncPodcastController::class,'store'])->name('podcast.sync.store');
        Route::delete('podcasts/sync/delete/{id}',[SyncPodcastController::class,'destroy'])->name('podcast.sync.delete');
        Route::resource('podcasts', PodcastController::class,['names' => 'podcast']);
        Route::get('episodes/{id}',[EpisodeController::class , 'show'])->name('episode.show');
        Route::get('episodes/{episodeId}/show', [EpisodeController::class , 'showDetails'])->name('episode.show.details');
        Route::put('episodes/{id}',[EpisodeController::class , 'update'])->name('episode.update');
        Route::get('episodes/new/create',[EpisodeController::class , 'create'])->name('episode.new.create');
        Route::post('episodes/store',[EpisodeController::class , 'store'])->name('episode.store');

        Route::get('categories/{id}',[CategoryController::class , 'showPodcasts'])->name('category.podcast');
        Route::get('categories/new/create',[CategoryController::class , 'create'])->name('category.new.create');
        Route::resource('categories', CategoryController::class,['names'=>'category']);

        Route::resource('podcasters',PodcasterController::class,['names' => 'podcaster']);
        Route::get('podcasters/{podcaster}/podcasts', [PodcasterController::class , 'showPodcasts'])->name('podcaster.podcast');

        Route::view('new-admin', 'admin.create-new-admin')->name('newAdmin');
        Route::post('new-admin', [AccountController::class,'store'])->name('newAdmin.store');

        Route::prefix('settings')->group(function(){
            Route::get('/', [SettingController::class,'index'])->name('setting.index');
            Route::post('store',[SettingController::class,'store'])->name('setting.store');
        });

        Route::get('account-settings',[AccountController::class ,'show'])->name('account-settings');
        Route::post('account-settings/store/info',[AccountController::class ,'storeInfo'])->name('account-settings.store.info');
        Route::post('account-settings/store/new-password',[AccountController::class ,'storePassword'])->name('account-settings.store.new-password');
        Route::post('logout',[AdminAuthController::class , 'logout'])->name('logout');
    });


    // authentication part ...

    Route::get('/login', [AdminAuthController::class , 'show'])->name('login.show');
    Route::post('/login', [AdminAuthController::class , 'login'])->name('login');

});

Route::get('/feeds/podcasts/{uuid}', [FeedController::class , 'podcast'])->name('podcast.feed');
Route::get('/feeds/podcasters/{uuid}', [FeedController::class , 'podcaster'])->name('podcaster.feed');
Route::get('/feeds/categories/{uuid}', [FeedController::class , 'category'])->name('category.feed');
