<?php

use Illuminate\Support\Facades\Route;
use App\Models\Note;
use Illuminate\Http\Request;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {    

    $user = auth()->user();
    $notes = Note::all();

    return view('pages.notes_area', ['user' => $user, 'notes' => $notes]);
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/create-note', function (Request $request) {    

    $note = new Note;
    
    $note->title = $request->title;
    $note->content = $request->content;

    $note->save();

    return redirect('dashboard');
})->name('create-note');

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/delete-note/', function (Request $request) {    

    $note = Note::find($request->id);

    $note->delete();

    return redirect('dashboard');
})->name('delete-note');



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
