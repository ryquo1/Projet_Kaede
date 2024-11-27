<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\web\KaeUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaeUsersController extends Controller
{
    public static function getAllSource(){
        return view('user', ["users" => KaeUsers::all()]);
    }
}
