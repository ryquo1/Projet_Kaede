<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KaeRole2 extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $table = 'KAE_ROLE_2';

    protected $primaryKey = ['ID_ROLE', 'ID_USER'];

    public $timestamps = false;


    public static function getUserRole($ID_USER){
        $UserRole = DB::table('KAE_ROLE_2')
        -> select('ID_USER', 'ID_ROLE')
        -> where('ID_USER', '=', $ID_USER)
        -> get();
        return $UserRole;
    }

    public static function CreateUserRole($ID_USER, $ID_ROLE){
        DB::table('KAE_ROLE_2')->insert([
            'ID_USER'=> $ID_USER,
            'ID_ROLE'=> $ID_ROLE,
        ]);
    }

    public static function UpdateUserRole($ID_ROLE, $ID_USER ){
        DB::table('KAE_ROLE_2')->where('ID_USER', '=', $ID_USER)->update([
            'ID_USER'=> $ID_USER,
            'ID_ROLE'=> $ID_ROLE,
        ]);
    }

    public static function DeleteUserRole($ID_USER){
        DB::table('KAE_ROLE_2')->where('ID_USER', '=', $ID_USER)->delete();
    }

    public static function DeleteRoleUser($ID_ROLE){
        DB::table('KAE_ROLE_2')->where('ID_ROLE', '=', $ID_ROLE)->delete();
    }
}