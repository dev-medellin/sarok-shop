<?php

namespace App\Models;

use App\Mail\EmailVerification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmailVerify;
use Illuminate\Support\Facades\Mail;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = ['fname','lname','email','password'];

    public static function createdUser($data,$token_key)
    {
       $checker = self::where('email', $data['email'])->first();
       if(!empty($checker)){
            return false;
        }else{
            $user = self::updateOrCreate(['email'   => $data['email']],$data);
            if($user){
                $code = self::randomCode();
                $fullname = $data['fname'].' '.$data['lname'];
                EmailVerify::updateOrCreate(['email_address'   => $data['email']],[
                    'email_address' => $data['email'],
                    'token_access' => $token_key,
                    'code' => $code,
                    'status' => 'not_verify'
                ]);
                $info = [
                    'token' => $token_key,
                    'fullname' => $fullname,
                    'email' => $data['email']
                ];
                Mail::to($data['email'])->send(new EmailVerification($info));
            }
            return $user;
        }
    }

    public static function randomCode($length = 4){
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
    }
}
