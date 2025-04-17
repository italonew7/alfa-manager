<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;

class RecuperarSenhaController extends Controller
{

    public function setPasswordAttribute($value)
    {
    $this->attributes['password'] = Hash::needsRehash($value) ? bcrypt($value) : $value;
    }

    public function formSolicitar()
    {
        return view('auth.esqueci-senha');
    }

    public function enviarLink(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);

        $token = Str::random(60);
        $email = $request->email;

        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $email],
            [
                'email' => $email,
                'token' => $token,
                'created_at' => now()
            ]
            );

        $link = url('/redefinir-senha/' . $token);

        Mail::raw('Clique aqui para redefinir sua senha:' . $link, function($message) use ($email){
            $message->to($email)->subject('Recuperação de senha');
        });

        return redirect()->route('senha.show')->with('success', 'Link de recuperação enviado para seu e-mail.');
    }

    public function formRedefinir($token){

        return view('auth.redefinir-senha', compact('token'));

    }

    public function redefinir(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $reset = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if(!$reset){
            return back()->withErrors('email', 'Token inválido ou expirado.');
        }

        $user = User::where('email', $request->email)->first();
        $user->password = $request->password;
        $user->save();

        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        return redirect()->route('login.show')->with('success', 'Senha alterada com sucesso!');

    }
}

