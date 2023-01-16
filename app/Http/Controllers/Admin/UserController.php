<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(){
        return view('admin.user.index');
    }
    public function createUser(Request $request){
        AdminUser::newUser($request);
        return redirect('/add-user')->with('message', 'User info save successfully');
    }
    public function manage(){
        return view('admin.user.manage', ['users' => AdminUser::all()]);

    }



}
