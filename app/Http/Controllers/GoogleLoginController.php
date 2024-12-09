<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        // Clear the current session to ensure a fresh OAuth login
        session()->forget('user');

        // Redirect to Google OAuth
        return Socialite::driver('google')
        ->with(['prompt' => 'select_account'])
        ->redirect();

    }

    public function handleGoogleCallback()
    {
        // Get the Google user
        $googleUser = Socialite::driver('google')->stateless()->user();
        
        // Store the user in the session
        session(['user' => $googleUser]);

        // Redirect to the dashboard
        return redirect('/dashboard');
    }
    
    /**
     * Logout and redirect to the welcome page.
     */
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect('/');
    }   

}
