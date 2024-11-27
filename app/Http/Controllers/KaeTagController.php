<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\web\KaeTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaeTagController extends Controller
{
    public static function getAllSource(){
        return view('tag', ["tags" => KaeTag::all()]);
    }
}
