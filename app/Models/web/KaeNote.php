<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KaeNote extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $table = 'KAE_NOTE';

    protected $primaryKey = 'ID_NOTE';

    public $timestamps = false;


    public static function getNoteByID($ID_NOTE){
        $NOTE = DB::table('KAE_NOTE')
        -> select('ID_NOTE', 'ID_ARTICLE', 'COMMENT', 'NOTE')
        -> where('ID_NOTE', '=', $ID_NOTE)
        -> get();
        return $NOTE;
    }

    public static function CreateNote( $ID_ARTICLE, $COMMENT, $NOTE ){
        DB::table('KAE_NOTE')->insert([
            'ID_ARTICLE'=> $ID_ARTICLE,
            'COMMENT'=> $COMMENT,
            'NOTE'=> $NOTE,
        ]);
    }

    public static function UpdateNote($ID_NOTE, $ID_ARTICLE, $COMMENT, $NOTE ){
        DB::table('KAE_NOTE')->where('ID_NOTE', '=', $ID_NOTE)
            ->update([
                'ID_ARTICLE'=> $ID_ARTICLE,
            'COMMENT'=> $COMMENT,
            'NOTE'=> $NOTE,
        ]);
    }

    public static function DeleteNote($ID_NOTE){
        DB::table('KAE_NOTE')->where('ID_NOTE', '=', $ID_NOTE)->delete();
    }

}
