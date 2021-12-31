<?php

use Illuminate\Support\Facades\Route;
use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Controllers\NoteController;

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

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [NoteController::class, 'dashboardNote'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/create-note', [NoteController::class, 'create_note'])->name('create-note');

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/delete-note/{id}', [NoteController::class, 'delete_note'])->whereNumber('id')->name('delete-note');



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
