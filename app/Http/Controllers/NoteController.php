<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    function dashboardNote(){
        $user = auth()->user();
        $notes = Note::all();
        return view('pages.notes_area', ['user' => $user, 'notes' => $notes]);
    }

    function create_note(Request $request){
        $note = new Note;

        $note->title = $request->title;
        $note->content = $request->content;

        $note->save();

        return redirect('dashboard');
    }

    function delete_note(Request $request){
        $note = Note::find($request->id);

        $note->delete();

        return redirect('dashboard');
    }

}
