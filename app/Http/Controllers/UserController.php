<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function UserIndex(){
        $users = User::all();
        return view('Users.index')->with('users',$users);
    }

    public function UserCreate(){
        return view('Users.create');
    }

    public function UserStore(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:32',
            'email' => 'required|email|unique:users,email', // Ensures email is unique
            'password' => 'required'
        ]);
       
        User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>$request->password,
        ]);

        return redirect()->route('user.index')->with('success','user updated successfully');
    }
    public function UserEdit($id){
        $user = User::findOrFail($id);
       
        return view('users.edit')->with('user', $user);
    }

    public function UserUpdate(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|max:32',
            'email' => 'required|email|unique:users,email', 
            'password' => 'required'
        ]);

            $user =  User::findOrFail($id);

            $user->update($validated);

            return redirect()->route('user.index')->with('success','user updated successfully');

    }

    public function UserDelete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('Deleted', 'user deleted successfully');
    }
}

