<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

     /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    |This controller handles authenticating users for the application and redirecting them to your home screen.
    |
    */


    // display login form
    public function showLoginForm(){
        
          // If the user is already authenticated, redirect them to their dashboard
          if (Auth::check()) {
            return redirect()->route('dashboard'); 
        }
        return view('auth.login');
    }


    // handles login request 
    public function login(Request $request)
    {
       
        $this->validateLogin($request);
    
        $user = User::where('email', $request->email)->first();
    
        if (!$user || !Hash::check($request->password, $user->password)) {
           
            return redirect()->back()
                             ->withInput($request->only('email'))  
                             ->withErrors(['email' => 'Invalid credentials.']);
        }
    
        // Log in the user if credentials are correct
        Auth::login($user);
    
        //Redirect based on role
        if ($user->role->slug == 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role->slug == 'project_manager') {
            return redirect()->route('project_manager.dashboard');
        } elseif ($user->role->slug == 'staff') {
            return redirect()->route('staff.dashboard');
        }
    
        // Default home route if no role matches
        return redirect()->route('login');
    }
    

    // Validates the user login request 
    protected function validateLogin(Request $request){
       $request->validate([
        'email' => 'required|email',
        'password' => 'required',
     ]);
    }


     // Logout and redirect to login page
     public function logout()
     {
         Auth::logout();
         return redirect()->route('login');
     }

}
