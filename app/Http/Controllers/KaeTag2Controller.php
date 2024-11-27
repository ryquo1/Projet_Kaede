<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\web\KaeTag2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaeTag2Controller extends Controller
{
    public static function getAllSource(){
        return view('tag2', ["tags2" => KaeTag2::all()]);
    }
}
