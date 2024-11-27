<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\web\KaeNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaeNoteController extends Controller
{
    public static function getAllNote(){
        return view('note', ["notes" => KaeNote::all()]);
    }
    
}
