<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KaeUsers extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $table = 'KAE_USERS';

    protected $primaryKey = 'ID_USER';

    public $timestamps = false;


    public static function getUser($IdUser){
        return DB::table('KAE_USERS')-> select('EMAIL', 'FIRSTNAME', 'LASTNAME')
            -> where('ID_USER', '=', $IdUser)-> get();
    }

    public static function CreateUser($email, $password, $firstName, $lastName){
        DB::table('KAE_USERS')->insert([
            'EMAIL'=> $email,
            'PASSWORD' => $password,
            'FIRSTNAME' => $firstName,
            'LASTNAME' => $lastName,
        ]);
    }

    public static function UpdateUser($ID_USER, $EMAIL, $PASSWORD, $FIRSTNAME, $LASTNAME ){
        DB::table('KAE_USERS')->where('ID_USER', '=', $ID_USER)->update([
            'EMAIL'=> $EMAIL,
            'PASSWORD' => $PASSWORD,
            'FIRSTNAME' => $FIRSTNAME,
            'LASTNAME' => $LASTNAME,
        ]);
    }

    public static function DeleteUser($ID_USER){
        DB::table('KAE_USER')->where('ID_USER', '=', $ID_USER)->delete();
    }

}
