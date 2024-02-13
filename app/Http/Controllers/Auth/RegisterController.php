<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    
    public function register(Request $request)
    {
      
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

        if ($request->hasFile('image')) {
            // Store the image file
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('profile_images'), $imageName);
        } else {
            // If no image is provided, set imageName to null
            $imageName = null;
        }

           // Create a new user instance
    $user = new User([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'contact' => $request->contact,
        'password' => bcrypt($request->password),
        'gender' => $request->gender,
        'image' => $imageName,
    ]);

    // Save the user to the database
    $user->save();

        // Flash success message
    Session::flash('success', 'Registration successful');

    // Redirect back to the registration page
    return redirect()->route('register');
    }

}
