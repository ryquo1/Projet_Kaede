<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\web\KaeUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaeUsersController extends Controller
{
    public static function getAllSource()
    {
        return view('user', ["users" => KaeUsers::all()]);
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/great');
        }

        return redirect('/login')->with('error', 'VOUS AVEZ ÉCHOUÉ ! Mais vous pouvez toujours réessayer...');
    }
}
