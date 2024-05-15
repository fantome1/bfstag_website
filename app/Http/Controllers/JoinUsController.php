<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Cookie;

class JoinUsController extends Controller
{
    public function show()
    {
        return view('auth.join_us');
    }
    public function welcome()
    {
        $user = json_decode(Cookie::get('user'), true);
        return view('auth.mailsentwelcome', ['user' => $user]);
    }

    public function signup(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'whatsapp' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'sector' => 'required',
            'business' => 'nullable',
        ]);
        $password = Str::random(8);
        $password .= Str::random(1);
        $password .= Str::random(1);
        $password .= Str::random(1);
        $password = str_shuffle($password);
        $data['password'] = bcrypt($password);

        try {
            User::create($data);
            Mail::to($data['email'])->send(new WelcomeMail($data, $password));
            $userCookie = Cookie::make('user', json_encode($data), 30, null, null, true, true);
            Cookie::queue($userCookie);
            return response()->json(['message' => 'User created successfully and mail sent', 'status_code' => 200], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage() ], 201);
        }
    }
}
