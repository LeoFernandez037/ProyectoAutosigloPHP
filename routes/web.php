<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    if (DB::connection()->getDatabaseName()) {
        echo "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
    }
});
