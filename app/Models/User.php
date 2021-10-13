<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    // public function authenticate(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);

    //     $user = Users::where('email', $request->input('email'))->first();
    //     if(Hash::check($request->input('password'), $user->password)){
    //     $apikey = base64_encode(str_random(40));
    //     Users::where('email', $request->input('email'))->update(['api_key' => "$apikey"]);;
    //     return response()->json(['status' => 'success','api_key' => $apikey]);
    //     }else{
    //     return response()->json(['status' => 'fail'],401);
    //     }
    // }

}
