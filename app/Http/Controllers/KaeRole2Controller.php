<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\web\KaeRole2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaeRole2Controller extends Controller
{
    public static function getAllRole2(){
        return view('role2', ["roles2" => KaeRole2::all()]);
    }

}
