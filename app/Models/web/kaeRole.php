<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KaeRole extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $table = 'KAE_ROLE';

    protected $primaryKey = 'ID_ROLE';

    public $timestamps = false;


    public static function getRole($ID_ROLE){
        $tag = DB::table('KAE_ROLE')
        -> select('LABEL')
        -> where('ID_ROLE', '=', $ID_ROLE)
        -> get();
        return $tag;
    }

    public static function CreateRole($LABEL){
        DB::table('KAE_ROLE')->insert([
            'LABEL'=> $LABEL,
        ]);
    }

    public static function UpdateRole($ID_ROLE, $LABEL ){
        DB::table('KAE_ROLE')->where('ID_ROLE', '=', $ID_ROLE)->update([
            'LABEL'=> $LABEL,
        ]);
    }

    public static function DeleteTag($ID_ROLE){
        DB::table('KAE_ROLE')->where('ID_ROLE', '=', $ID_ROLE)->delete();
    }

}