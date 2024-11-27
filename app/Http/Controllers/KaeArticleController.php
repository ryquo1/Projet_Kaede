<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\web\KaeArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaeArticleController extends Controller
{

    public static function getAllArticle(){
        return view('artcile', ["articles" => KaeArticle::all()]);
    }



}
