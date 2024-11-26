<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KaeSource extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $table = 'KAE_SOURCE';

    protected $primaryKey = 'ID_SOURCE';

    public $timestamps = false;


    public static function getSourceByID($numSource){
        $SOURCE = DB::table('KAE_SOURCE')
        -> select('TITLE')
        -> where('ID_SOURCE', '=', $numSource)
        -> get();
        return $SOURCE;
    }


    public static function getAllSOURCE(){
        return KaeSOURCE::where("ID_SOURCE","=","0")->get();
    }

    public static function CreateSOURCE( $URL, $DATE ){
        DB::table('KAE_SOURCE')->insert([
            'URL'=> $URL,
            'DATE'=> DB::raw("str_to_date('".$DATE."', '%Y-%m-%d')"),
        ]);
    }

    public static function UpdateSOURCE($ID_SOURCE,$URL, $DATE ){
        DB::table('KAE_SOURCE')->where('ID_SOURCE', '=', $ID_SOURCE)
            ->update([
                'URL'=> $URL,
                'DATE'=> DB::raw("str_to_date('".$DATE."', '%Y-%m-%d')"),
            ]);
    }

    public static function DeleteSOURCE($ID_SOURCE){
        DB::table('KAE_SOURCE')->where('ID_SOURCE', '=', $ID_SOURCE)->delete();
    }

}
