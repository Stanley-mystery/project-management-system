<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to their dashboard screen.
    |
    */

    // Display login form
    public function showLoginForm()
    {
      
        return view('auth.login');
    }

    // Handles the login request
    public function login(Request $request)
    {
        // Apply throttle rate-limiting
        if ($this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        // Validate the login request
        $this->validateLogin($request);

        $user = User::where('email', $request->email)->first();

        // If credentials are incorrect
        if (!$user || !Hash::check($request->password, $user->password)) {
            // Increment the failed attempts
            $this->incrementLoginAttempts($request);

            return redirect()->back()
                             ->withInput($request->only('email'))
                             ->withErrors(['email' => 'Invalid credentials.']);
        }

        // Log the user in if credentials are correct
        Auth::login($user);

        // Clear the login attempts on successful login
        $this->clearLoginAttempts($request);

        // Redirect user to the appropriate dashboard based on role
        return $this->redirectToDashboard($user);
    }

    // Method to handle the redirection based on user role
    protected function redirectToDashboard(User $user)
    {
        switch ($user->role->slug) {
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'client':
                return redirect()->route('client.dashboard');
            case 'seller':
                return redirect()->route('seller.dashboard');
            default:
                return redirect()->route('home');
        }
    }

    // Validates the user login request
    protected function validateLogin(Request $request)
    {
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

  
    protected function hasTooManyLoginAttempts(Request $request)
    {
        $key = $this->throttleKey($request);
        return RateLimiter::tooManyAttempts($key, 5);
    }

   
    protected function incrementLoginAttempts(Request $request)
    {
        $key = $this->throttleKey($request);
        RateLimiter::hit($key, 60);
        // RateLimiter::hit($key, 120); 
    }

  
    protected function clearLoginAttempts(Request $request)
    {
        $key = $this->throttleKey($request);
        RateLimiter::clear($key);
    }

   
    protected function throttleKey(Request $request)
    {
        return 'login:' . $request->email;
    }


    protected function sendLockoutResponse(Request $request)
    {
    
        return redirect()->back()
                         ->withInput($request->only('email'))
                         ->withErrors(['email' => 'Too many login attempts. Please try again in few minutes ' ])
                         ->with('locked', true);
    }
}
