<?php

namespace App\Http\Controllers;

use App\Models\Comptes;
use Illuminate\Http\Request;

class UserAuthentification extends Controller
{
    //

    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
        return view('authentification_vue');
    }
    /**
     * Handle account login request
     *
     * @param UserAuthRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // $credentials = $request->getCredentials();
        $compteValidation = $request->validate([
            'username' => 'required',
            'password' => 'required|min:8'
        ]);
        if ($compteValidation) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $objCompte = new Comptes;
            $res = Comptes::where('login',$username)->where('pwd', $password)->get()->first();
            if ($res != null) {
                $user_sess = array(
                    'id' => $res->idcompte,
                    'login' => $res->login,
                    'email' => $res->email,
                    'user_token' => $res->tokencompte,
                    'is_connected' => $res->is_connected,
                    'is_valid' => $res->is_connected,
                    'role' => $res->role,
                );
                $request->session()->put('users',$user_sess);
                if ($res->role == 'administrateur') {
                    return redirect()->to('admin/index')->with('success_message','Vous êtes connecté avec succès !');
                }else if($res->role == 'administrateur'){
                    return redirect()->to('organisateur@home')->with('success_message','Vous êtes connecté avec succès !');
                }
            }
        }
        return redirect()->to('auth/login')->with('error_message','Echec d\'authentification !');
    }
    /**
     * Handle response after user authenticated
     *
     * @param Request $request
     * @param Auth $user
     *
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }
}
