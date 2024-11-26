<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KaeArticle extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $table = 'KAE_ARTICLE';

    protected $primaryKey = 'ID_ARTICLE';

    public $timestamps = false;


    public static function getArticleByID($numArticle){
        $article = DB::table('KAE_ARTICLE')
        -> select('TITLE')
        -> where('ID_ARTICLE', '=', $numArticle)
        -> get();
        return $article;
    }

    public static function getArticleByName($ArticleTitle){
        $article = DB::table('KAE_ARTICLE')
        -> select('TITLE')
        -> where('TITLE', '=', $ArticleTitle)
        -> get();
        return $article;
    }

    public static function getAllArticle(){
        return KaeArticle::where("ID_ARTICLE","=","0")->get();
    }

    public static function CreateArticle($ID_SOURCE, $ID_USER, $TITLE, $CONTENTE, $DATE ){
        DB::table('KAE_ARTICLE')->insert([
            'ID_SOURCE'=> $ID_SOURCE,
            'ID_USER'=> $ID_USER,
            'TITLE'=> $TITLE,
            'CONTENT'=> $CONTENTE,
            'DATE'=> DB::raw("str_to_date('".$DATE."', '%Y-%m-%d')"),
        ]);
    }

    public static function UpdateArticle($ID_ARTICLE,$ID_SOURCE, $ID_USER, $TITLE, $CONTENTE, $DATE ){
        DB::table('KAE_ARTICLE')->where('ID_ARTICLE', '=', $ID_ARTICLE)
            ->update([
                'ID_SOURCE'=> $ID_SOURCE,
                'ID_USER'=> $ID_USER,
                'TITLE'=> $TITLE,
                'CONTENT'=> $CONTENTE,
                'DATE'=> DB::raw("str_to_date('".$DATE."', '%Y-%m-%d')"),
            ]);
    }

    public static function DeleteArticle($ID_ARTICLE){
        DB::table('KAE_ARTICLE')->where('ID_ARTICLE', '=', $ID_ARTICLE)->delete();
    }

}
