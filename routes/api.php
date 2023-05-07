<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;



Route::get('/results/{tournamentId}', [ResultController::class, 'getResult']);

