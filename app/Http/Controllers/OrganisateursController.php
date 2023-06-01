<?php

namespace App\Http\Controllers;

use App\Models\CategEvents;
use App\Models\CategoriePlaces;
use App\Models\CategoriesPlaceInEvenements;
use App\Models\Evenements;
use App\Models\ModelBillets;
use App\Models\Organisateurs;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Double;
use illuminate\Support\Str;

class OrganisateursController extends Controller
{
    //


    public function index()
    {
        //code here
        $modelBillet = new ModelBillets();
        $all_modelBillet = $modelBillet->getAllModelBillet();
       // var_dump($all_modelBillet);
        return view("organisateur.index",compact($all_modelBillet));
    }
    public function newEvent()
    {
        $categEvent = new CategEvents();
        $allcateg = $categEvent->getAllNbCategEvent();
        return view("organisateur.newevents",compact("allcateg"));
    }

    public function eventnbcateg($code_v,$token)
    {
        $cate_ev = new CategEvents();
        $categ_place = new CategoriePlaces();
        $cp = $categ_place::get();
        return view("organisateur.eventnbcateg",compact(["code_v","token","cp"]));
    }
    public function first_nb_validation(Request $request)
    {
        $evenement = new Evenements();

        $namev = $request->post("namev");
        $descev = $request->post("descev");
        $nbreplace = $request->post("nbreplace");
        $datev = $request->post("datev");
        $categplace = $request->post("categplace");
        $code_v = $request->post("code_v");
        $token_t = Str::random(65);
        if($categplace)
        {
            $tab = array("nomidEvenement"=> $namev,"descidEvenement" => $descev,"nbrplaceidEvenement" => $nbreplace,
            "heureDebutEvenement" => $datev,"tokenidEvenement" =>$token_t ,"codeEvenement" =>random_int(10000000,99999999),
            "organis_ev" => 1,"categ_idcateg_ev" => $code_v,"created_at"=>date("Y-m-d H:i:s"));
            $event = $evenement->create_ev($tab);
            if($event)
            {
               // return redirect("/organisateur/second_nb_phase/".$event."/".$token_t)->with("data",$categplace);
               return redirect()->route('organisateur.second_nb_phase',[$event,$token_t]);
            }
            else
            {
                return back()->with("error","impossible de creer cet évenement");
            }
            //var_dump($request->post());
         }
    }
    public function second_nb_phase($event_id, $token_t)
    {
        return view("organisateur.second_nb_phase",compact(['event_id','token_t']));
    }

    public function seconde_nb_validation(Request $request)
    {
        var_dump(
        $request->post()
        );
    }
    public function final_nb_validation(Request $request)
    {
        var_dump($request->post());
    }
    public function newBillingEvent()
    {
        $categEvent = new CategEvents();
        $allcateg = $categEvent->getAllBCategEvent();
        return view("organisateur.new_billing_event",compact("allcateg"));
    }
    public function billingchoice()
    {
        $categEvent = new CategEvents();
        $allcateg = $categEvent->getAllNbCategEvent();
        return view("organisateur.checkmode");
    }

    public function second_phase($code_id,$token)
    {
        return view("organisateur.second_phase_validation",compact(["code_id","token"]));
    }

    public function final_phase()
    {
        return view("organisateur.final_phase_validation");
    }

    public function eventcateg($code_v,$token)
    {
        $cate_ev = new CategEvents();
        $categ_place = new CategoriePlaces();
        $cp = $categ_place::get();
        return view("organisateur.eventcateg",compact(["code_v","cp"]));
    }
    public function first_validation(Request $request)
    {
        $evenement = new Evenements();
        // a faire : verifier que le nombre n'est pas inférieur à 0 et la validation des autres élémements!
        $name = $request->post("namev");
        $descev = $request->post("descev");
        $nbreplace = $request->post("nbreplace");
        $date = $request->post("datev");
        $code_v = $request->post("code_v");
        $token_t = Str::random(65);
        $tab_categplace = $request->post("categplace");
        if(count($tab_categplace))
        {
            $tab = array("nomidEvenement"=> $name,"descidEvenement" => $descev,"nbrplaceidEvenement" => $nbreplace,"heureDebutEvenement" => $date,"tokenidEvenement" =>$token_t ,"codeEvenement" =>random_int(10000000,99999999),"organis_ev" => 1,"categ_idcateg_ev" => $code_v,"created_at"=>date("Y-m-d H:i:s"));
           $event = $evenement->create_ev($tab);
            if($event)
            {
                return redirect("/organisateur/second_phase/".$event."/".$token_t)->with("data",$tab_categplace);
               //return redirect()->route('organisateur.second_phase');
            }
            else
            {
                return back()->with("error","impossible de creer cet évenement");
            }
        }
        else
        {
            return back()->with("error","impossible de valider ce commande faute de catégories de places");
        }
    }
    public function seconde_validation(Request $request)
    {
        $categPlaceInEvent = new CategoriesPlaceInEvenements();
        $tab_code_id = $request->post('code_id');
        $tab_categ = $request->post('categ');
        $tab_number = $request->post('nbrplac');
        $tab_price = $request->post('price');
        $tab_devise  = $request->post('devise');
        $t = 0;
        for($i=0;$i<count($tab_number);$i++)
        {
            echo $tab_number[$i]." et ".$tab_number[$i] ;
            // preparation du tableau  pour insertion dans la base de données!
            $tab_data = array(
            'nbrePersonneCategoriePlace' => $tab_number[$i],
            'tokenPlaceInEvenement' => Str::random(63),
            'evenement_idEvenement' => $tab_code_id[$i],
            'CategPlc_idCategPlc' => $tab_categ[$i],
            'priceCategInplace' => $tab_price[$i],
            'devise' => $tab_devise[$i],
            'created_at' => date('Y-m-d H:i:s'));
            //
            $requete = $categPlaceInEvent::insert($tab_data);
            if($request)
            {
                $t += 1;
            }
        }
        if($t)
        {
            return redirect()->route("organisateur.final_phase");
        }
        else
        {
            return back()->with("error","une érreur s'est produite lors de la configuration des billets");
        }
    }

    public function final_validation( Request $request)
    {
        var_dump($request);
    }

    public function create_organis(Request $request)
    {
        // code here
    }
    public function update_organis(Request $request)
    {
        // code here
    }

    public function delete_organis(Request $request)
    {
        //  code here
    }

    public function read_organis(Request $request)
    {
        // code here

    }
}
