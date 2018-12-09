<?php


Route::group(['namespace' => 'mido\mypackage\Http\Controllers'], function () {

    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact/send', 'ContactController@send')->name('send');
});
