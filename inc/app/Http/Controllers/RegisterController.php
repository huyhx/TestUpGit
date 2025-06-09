<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FA\Google2FA;

class RegisterController extends Controller
{
    protected $google2fa;

    public function __construct()
    {
        $this->google2fa = new Google2FA();
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('2fa.setup');
    }

    public function setup2FA()
    {
        $user = Auth::user();
        $secret = $this->google2fa->generateSecretKey();

        $user->google2fa_secret = $secret;
        $user->save();

        $qrCodeUrl = $this->google2fa->getQRCodeUrl(
            'MyLaravelApp',
            $user->email,
            $secret
        );

        return view('auth.2fa_setup', compact('qrCodeUrl', 'secret'));
    }

    public function enable2FA(Request $request)
    {
        $user = Auth::user();
        $valid = $this->google2fa->verifyKey($user->google2fa_secret, $request->input('code'));

        if ($valid) {
            $user->google2fa_enabled = true;
            $user->save();

            return redirect()->route('dashboard')->with('success', '2FA được kích hoạt thành công!');
        }

        return back()->withErrors(['code' => 'Mã xác thực không hợp lệ']);
    }
}

