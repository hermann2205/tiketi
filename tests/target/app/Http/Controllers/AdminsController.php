<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAuthRequest;
use App\Models\Admins;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    //
    public function index(Request $request)
    {
        $all_admin = Admins::get();
        if ($request->session()->get('users') == null) {
            return redirect()->to('Auth/login');
        }
        return view('admin.accueille_vue');
    }
    public function create_admin(Request $request)
    {
        // code here
        $tab_item = array("index"=>"value");
        Admins::insert($tab_item);
    }
    public function update_admin(Request $request)
    {
        $tab_item = array("index"=>"value");
        $tab_where = array("index"=>"value");
        Admins::where($tab_where)->update($tab_item);
    }
    public function delete_admin($item)
    {
        //  code here
        $tab_where = array("index"=>"value");
        Admins::where($tab_where)->delete();
    }
    public function read_admin($item)
    {
        // code here
        $tab_where = array("index"=>$item);
        $item = Admins::where($tab_where);
        var_dump($item);
    }
}
