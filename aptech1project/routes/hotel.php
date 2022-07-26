<?php

Route::group(['prefix' => '/hotel'], function () {
		Route::get('/view', [App\Http\Controllers\HotelController::class,'showAll'])->name('showAll');

		Route::get('/detail', [App\Http\Controllers\HotelController::class,'showDetail'])->name('showDetail');
	});
