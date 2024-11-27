<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\web\KaeSource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaeSourceController extends Controller
{
    public static function getAllSource(){
        return view('source', ["sources" => KaeSource::all()]);
    }
}
