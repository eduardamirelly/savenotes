<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;

class MarkController extends Controller
{
    function create_mark(Request $request){
        $mark = new Mark;

        $mark->name = $request->name;

        $mark->save();

        return redirect('dashboard');
    }

}
