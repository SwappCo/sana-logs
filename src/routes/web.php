<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::namespace('\swappco\SanaLogs\Http\Controllers')
    ->prefix('swappco')
    ->group(function () {
        Route::get('index','SanaLogsController@index');
        Route::get('home', 'SanaLogsController@home');

    });

