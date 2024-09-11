<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class QueryController extends Controller
{
    // Function to show the form
    public function showForm()
    {
        return view('query'); // This will return the form view (query.blade.php)
    }

    // Function to handle the form submission and insert data
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Insert data into the database
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), // Hash the password using bcrypt
        ]);
        

        // Redirect or return a response
        return redirect()->back()->with('success', 'User created successfully!');
    }
}

