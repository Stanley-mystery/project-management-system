<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Role; // Assuming you have a Role model
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{

   /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles registering users for the application
    |
    */


    // Show the registration form
    public function showRegistrationForm()
    {

    // Fetch all roles except the 'admin' role
      $roles = Role::where('slug', '!=', 'admin')->get();

      return view('auth.register', compact('roles'));
    }

    // Handle the registration request
    public function register(Request $request)
    {
        // Validate the registration form inputs
        $validated = $this->validator($request->all());

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        // Create the user
        $user = $this->create($request->all());

        // Fire the Registered event
        event(new Registered($user));

      

        return redirect()->route('login')->with('status', 'Account created successfully!');; 
    }

    // Validator to validate the user inputs
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'nullable|string|max:15', 
            'role_id' => 'required|exists:roles,id', 
        ]);
    }

    // Create the user in the database
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone_number' => $data['phone_number'],
            'role_id' => $data['role_id'],
        ]);
    }
}
