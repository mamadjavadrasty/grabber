<?php

use App\Http\Controllers\Api\ApiCategoriesController;
use App\Http\Controllers\Api\ApiEpisodesController;
use App\Http\Controllers\Api\ApiNewPodcastController;
use App\Http\Controllers\Api\ApiPodcastersController;
use App\Http\Controllers\Api\ApiPodcastsController;
use App\Http\Controllers\Api\ApiSyncPodcastsController;
use App\Http\Controllers\Web\Admin\NewPodcastSearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['as' => 'Api.' , 'prefix' => 'v1'],function(){

    Route::post('podcast-create/{collectionId}', [ApiNewPodcastController::class, 'newPodcastCreate']);
    Route::post('podcast-create/{collectionId}/queue', [ApiNewPodcastController::class, 'newPodcastCreateQueue']);
    
    Route::post('sync-podcast/store',[ApiSyncPodcastsController::class,'store']);

    Route::prefix('podcasts')->group(function (){
        Route::post('/',[ApiPodcastsController::class,'index']);
        Route::post('{collectionId}/show/',[ApiPodcastsController::class,'show'])->name('showPodcast');
        Route::post('{collectionId}/episodes',[ApiPodcastsController::class,'podcastEpisodes']);
    });

    Route::prefix('episodes')->group(function (){
        Route::post('/',[ApiEpisodesController::class,'index']);
        Route::any('{collectionId}',[ApiEpisodesController::class,'indexCollectionId']);
        Route::post('{track_id}/show/',[ApiEpisodesController::class,'show']);
    });

    Route::prefix('podcasters')->group(function (){
        Route::post('/',[ApiPodcastersController::class,'index']);
        Route::post('{id}/show/',[ApiPodcastersController::class,'show']);
    });

    Route::prefix('categories')->group(function (){
        Route::post('/',[ApiCategoriesController::class,'index']);
        Route::post('{id}/show/',[ApiCategoriesController::class,'show']);
    });
});