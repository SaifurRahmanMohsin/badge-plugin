<?php

Route::group(['prefix' => 'api/v1'], function () {
    Route::resource('badges', 'Mohsin\Badge\Http\Badges');
});
