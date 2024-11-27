<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\web\KaeRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaeRoleController extends Controller
{
    public static function getAllRole(){
        return view('role', ["roles" => KaeRole::all()]);
    }
}
