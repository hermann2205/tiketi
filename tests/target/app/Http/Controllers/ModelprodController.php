<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Entities\ModelProdEntity;
use App\Models\Modelprod;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ModelprodController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->session()->get('users') == null) {
            return redirect()->to('Auth/login');
        }
        return view('model_index');
    }

    public function UploadFileModel(Request $request)
    {
        //Validatoin du fichier chargé
        $fichierValidation = $request->validate([
            'file_model' => 'required|image|mimes:jpeg,jpg,png'
        ]);
        if($fichierValidation){
            //Traitement du formulaire upload
            $fichier = $_FILES['file_model'];
            $nom_du_fichier = $fichier['name'];
            $description_du_fichier = $_POST['descriptionFile'];
            $chemin_du_fichier = $fichier['full_path'];
            $taille_du_fichier = $fichier['size'];

            $message = 'Enregistrement modèle échoué !';
            try {
                if($taille_du_fichier < 85160) {
                    $objModel = new Modelprod;
                    $objModel->setAttribute('nomModel', $nom_du_fichier);
                    $objModel->setAttribute('descriptModel', $description_du_fichier);
                    $objModel->setAttribute('lienModel', $chemin_du_fichier);
                    $new_token = Str::random(10);
                    $objModel->setAttribute('token_prod', $new_token);
                    if($objModel->save()){
                        $message = 'Enregistrement modèle effectué avec succès !';
                        return redirect('/model/index')->with('message',$message);
                    }
                }else{
                    $message = 'Enregistrement modèle échoué, taille du fichier est dépassée !';
                    print('Taille du fichier trop grand');
                }
            } catch (\Throwable $th) {
                print($th->getMessage());
            }
        }
        return redirect('/model@index')->with('message',$message);
    }
    public function create_modelprod(Request $request)
    {
        // code here
    }
    public function update_modelprod(Request $request)
    {
        // code here
    }

    public function delete_modelprod(Request $request)
    {
        //  code here
    }

    public function read_modelprod(Request $request)
    {
        // code here

    }
}
