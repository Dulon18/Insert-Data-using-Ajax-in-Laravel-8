<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function formCreate()
   {
       return view('welcome');
   }

    public function store(Request $request)
    {
       User::create([
           'name'=>$request->name,
           'address'=>$request->address,
           'email'=>$request->email,
           'password'=>$request->pswd
       ]);
       return ['result'=>'Data Insert successfully...'];
    }
}
