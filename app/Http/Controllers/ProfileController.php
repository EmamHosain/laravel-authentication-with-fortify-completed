<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user_information = auth()->user();
        return view('pages.profile-page', [
            'user_informations' => $user_information
        ]);
    }

    public function updatePasswordPage()
    {
        return view('pages.update-password-page');
    }

    public function deleteAccountPage()
    {
        return view('pages.delete-account-page');
    }

    public function deleteAccountConfirm(Request $request)
    {
        $request->validate([
            'password' => 'required'
        ]);
        $user = User::where('email', auth()->user()->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $user->delete();
            return redirect()->route('login');
        }
    }
}
