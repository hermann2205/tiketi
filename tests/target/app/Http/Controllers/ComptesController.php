<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use App\Models\Comptes;
use Illuminate\Http\Request;

class ComptesController extends Controller
{
    public function index()
    {
        return view('form_compte');
    }
    public function create_compte(Request $request)
    {
        $message = "Echec de création de compte !";
        $compteValidate = $request->validate([
            'file' => 'required|image|size:5012',
            'login' => 'required',
            'password' => 'required|min:8',
            'passwordConf' => 'required|min:8',
            'email' => 'required',
            'telephone' => 'required'
        ]);
        if($compteValidate){
            $objCompte = new Comptes();
            $objAdmin = new Admins();
            if ($request->get('password') == $request->get('passwordConf')) {
                $objCompte->setAttribute('login',$request->get('login'));
                $objCompte->setAttribute('password',$request->get('password'));
                $objCompte->setAttribute('telephone',$request->get('telephone'));
                $objCompte->setAttribute('email',$request->get('email'));
                $objCompte->setAttribute('is_connected',0);
                if ($request->get('typeUser') == 'administrateur') {
                    $objCompte->setAttribute('is_valid',0); //Type utilisateur Admin
                }else if($request->get('typeUser') == 'utilisateur'){
                    $objCompte->setAttribute('is_valid',1); //Type utilsateur User
                }
            }else {
                $message = "Echec de création de compte, incohérnce de mot de passe !";
            }
        }else{
            $message = "Echec de création de compte, veuillez remplir correctement tous les champs !";
        }
        return view('authentification')->with('error_message', $message);
    }
    public function update_compte(Request $request)
    {

    }
    public function delete_compte(Request $request)
    {
        //  code here
    }

    public function read_compte(Request $request)
    {
        // code here

    }
    public function log_out(Request $request)
    {
        if ($_SESSION['users'] != null) {
            $_SESSION['users'] = null;
        }
        return redirect()->to('login');
    }
}
