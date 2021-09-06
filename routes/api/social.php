<?php

use App\Domains\Social\Http\Controllers\Api\Cards\CommentsController;
use App\Domains\Social\Http\Controllers\Api\Cards\ReviewController;

/**
 * All route names are prefixed with 'api.social'.
 */
Route::group([
    'prefix' => 'social',
    'as' => 'social.',
    'namespace' => 'Social',
], function () {
    /**
     * All route names are prefixed with 'api.social.cards'.
     */
    Route::group([
        'prefix' => 'cards',
        'as' => 'cards.',
        'namespace' => 'Cards',
    ], function () {
        Route::group(['prefix' => '{card}'], function () {
            Route::get('/comments', [CommentsController::class, 'index'])->name('index');
            Route::group([
                'middleware' => [
                    'auth',
                ],
            ], function () {
                Route::post('/comments', [CommentsController::class, 'store'])->name('store');
                Route::get('/voted', [ReviewController::class, 'haveVoted'])->name('voted');
                Route::get('/voting/{status}', [ReviewController::class, 'voting'])->name('voting');
            });
        });
    });

    /**
     * All route names are prefixed with 'api.social.reviews'.
     */
    Route::group([
        'prefix' => 'reviews',
        'as' => 'reviews.',
        'namespace' => 'Reviews',
    ], function () {
        // ...
    });
});
