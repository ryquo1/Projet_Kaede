<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KaeTag2 extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $table = 'KAE_TAG_2';

    protected $primaryKey = ['ID_TAG', 'ID_NOTE'];

    public $timestamps = false;


    public static function getTagNote($ID_NOTE){
        $TagNote = DB::table('KAE_TAG_2')
        -> select('ID_TAG', 'ID_NOTE')
        -> where('ID_NOTE', '=', $ID_NOTE)
        -> get();
        return $TagNote;
    }

    public static function CreateTagNote($ID_TAG, $ID_NOTE){
        DB::table('KAE_TAG_2')->insert([
            'ID_TAG'=> $ID_TAG,
            'ID_NOTE'=> $ID_NOTE,
        ]);
    }

    public static function UpdateTagNote($ID_TAG, $ID_NOTE ){
        DB::table('KAE_TAG_2')->where('ID_NOTE', '=', $ID_NOTE)->update([
            'ID_TAG'=> $ID_TAG,
            'ID_NOTE'=> $ID_NOTE,
        ]);
    }

    public static function DeleteTagNote($ID_NOTE){
        DB::table('KAE_TAG_2')->where('ID_NOTE', '=', $ID_NOTE)->delete();
    }

    public static function DeleteNoteTag($ID_TAG){
        DB::table('KAE_TAG_2')->where('ID_TAG', '=', $ID_TAG)->delete();
    }
}