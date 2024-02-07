<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request){
                // Validate the incoming request data
                $request->validate([
                    'name' => 'required|string|max:255',
                    'username' => 'required|string|max:255|unique:users', 
                    'email' => 'required|string|email|max:255|unique:users',
                    'contact' => 'required|string|max:255',
                    'password' => 'required|string|min:8|confirmed',
                    'gender' => 'required|in:male,female,other',
                    'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
                    'agree' => 'required|accepted', 
                ]);
               
              $imageName = $request->image->store('profile_images');
              
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->contact = $request->contact;
            $user->password = bcrypt($request->password);
            $user->gender = $request->gender;
            $user->image = $imageName; 

            $user->save();
    }


















}
