<?php

use App\Livewire\HomePage;
use App\Livewire\Pages\CardiologyInJeopardy;
use App\Livewire\Pages\CongressInformation;
use App\Livewire\Pages\Homecoming;
use App\Livewire\Pages\Registration;
use App\Livewire\Pages\ScientificProgram;
use App\Livewire\Pages\Submission;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomePage::class);
Route::prefix('/congress-information')->group(function () {
    Route::get('/', CongressInformation::class);
    Route::get('#welcome-message', CongressInformation::class);
    Route::get('#organizing-committee', CongressInformation::class);
    Route::get('#faculties', CongressInformation::class);
});
Route::prefix('/scientific-program')->group(function () {
    Route::get('/', ScientificProgram::class);
    Route::get('#at-glance', ScientificProgram::class);
    Route::get('#schedule-sympo', ScientificProgram::class);
    Route::get('#schedule-ws', ScientificProgram::class);
    Route::get('#scientific-corner', ScientificProgram::class);
});
Route::prefix('/submission')->group(function () {
    Route::get('/', Submission::class);
    Route::get('/#guideline-abstract', Submission::class);
    Route::get('/#submission', Submission::class);
});

Route::get('/registration', Registration::class);

Route::get('/cardiology-in-jeopardy', CardiologyInJeopardy::class);
Route::get('/homecoming', Homecoming::class);
