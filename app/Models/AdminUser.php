<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;

    /**
     * @var AdminUser|mixed
     */
    private static $user;

    public static function newUser($request)
    {
        self::$user             = new AdminUser();
        self::$user->name       = $request->name;
        self::$user->email      = $request->email;
        self::$user->password   = $request->password;
        self::$user->save();
    }
}
