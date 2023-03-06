<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilePost extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $user = Auth()->user();

        if (!(Hash::check($request->get('current_password'), $user->password))) {
            return redirect()->route('profile')->withError('Your Current password does not matches with the password you provided. Please try again');
        } else {
            $user->password = Hash::make($request->get('password'));
            $user->update();
            return redirect()->route('profile')->withMessage('Password updated successfully!');
        }
    }
}
