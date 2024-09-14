<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Abhi;

class AbhiController extends Controller
{
    public function UserIndex(){
    $users=Abhi::all();
    return view('Users.index2')->with('users',$users);
    }
    public function UserCreate(){
        return view('Users.create2');
    }
    public function UserStore(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:32',
            'email' => 'required|email|unique:users,email', // Ensures email is unique
            'mobile'=>'required',
        ]);
       
        Abhi::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'mobile'=>$request->mobile,
            
        ]);

        return redirect()->route('user.index2')->with('success','user updated successfully');
    }

}