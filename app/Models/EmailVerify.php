<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailVerify extends Model
{
    use HasFactory;

    protected $table = 'email_code';

    protected $fillable = ['email_address','token_access','code','status'];

    public static function checkToken($token){
        $checker =  self::where('token_access',$token)->where('status','not_verify')->first();
        if(!empty($checker)){
            self::where('token_access',$token)
            ->update(['status' => "verify"]);
            return true;
        }
        return false;
    }

    public static function checkStatus($email){
        $checker = Users::where('email', $email)->first();
        if(!empty($checker)){
            $checkerVerification = self::where('email_address', $email)->where('status','not_verify')->first();
            if(!empty($checkerVerification)){
                return [
                    'status' => 'not_verify',
                    'message' => 'Please verify your email address to proceed on login.'
                ];
            }else{
                return [
                    'status' => 'verify',
                    'message' => 'Enjoy Shopping!'
                ];
            }
        }else{
            return [
                'status' => 'not_exist',
                'message' => 'Credentials not found in our data.'
            ];
        }
    }
}
