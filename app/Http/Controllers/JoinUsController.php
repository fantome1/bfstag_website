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
        try {
            $data = $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'phone' => 'required|unique:users',
                'whatsapp' => 'required|unique:users',
                'address' => 'required',
                'email' => 'required|email',
                'sector' => 'required',
                'business' => 'nullable',
            ]);
            $password = Str::random(11);
            $password = str_shuffle($password);
            $data['password'] = bcrypt($password);

            try {
                User::create($data);
                $userCookie = Cookie::make('user', json_encode($data), 30, null, null, true, true);
                Cookie::queue($userCookie);
                try {
                    Mail::to($data['email'])->send(new WelcomeMail($data, $password));
                } catch (\Exception $e) {
                    return response()->json(['message' => 'Votre compte a été crée avec succès, mais vous n\avez pas reçu l\'email contenant vos informations d\'identification.', 'status_code' => 200], 201);
                }
                return response()->json(['message' => 'Utilisateur crée avec succès et email envoyé !', 'status_code' => 200], 201);
            } catch (\Exception $e) {
                switch ($e->getCode()) {
                    case 11000:
                        return response()->json(['message' => "Un compte est déjà enregistré sur cette adresse email."], 200);
                    default:
                        return response()->json(['message' => 'Service introuvable'], 201);
                }
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Le numéro de téléphone ou whatsapp est déjà utilisé.']);
        }
    }
}
