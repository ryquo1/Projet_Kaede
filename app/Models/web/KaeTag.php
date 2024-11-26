<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KaeTag extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $table = 'KAE_TAG';

    protected $primaryKey = 'ID_TAG';

    public $timestamps = false;


    public static function getTag($numTag){
        $tag = DB::table('KAE_TAG')
        -> select('LABEL')
        -> where('ID_TAG', '=', $numTag)
        -> get();
        return $tag;
    }

    public static function CreateTAG($label){
        DB::table('KAE_TAG')->insert([
            'LABEL'=> $label,
        ]);
    }

    public static function UpdateTAG($ID_TAG, $label ){
        DB::table('KAE_TAG')->where('ID_TAG', '=', $ID_TAG)->update([
            'LABEL'=> $label,
        ]);
    }

    public static function DeleteTag($ID_TAG){
        DB::table('KAE_TAG')->where('ID_TAG', '=', $ID_TAG)->delete();
    }

}
