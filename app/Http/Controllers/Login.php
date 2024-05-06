<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Session;

class Login extends Controller
{
    public function index(){
        $data = [

        ];
        return view("login", $data);
    }

    public function logincheck(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $userProfile = users::where(["user_name" => $username,"user_password" => $password])->selectRaw('*')->get();
        if (empty($userProfile[0]->user_level)){
            return redirect()->route('login');
        }else{
            $userSession=[
                "id"=> $userProfile[0]->id,
                "name"=> $userProfile[0]->user_name,
                "username"=> $userProfile[0]->user_name,
                "tipe"=> $userProfile[0]->user_level
            ];
            // print_r($userSession);
            session($userSession);
            return redirect()->route('pariwisata');
            // $userProfile[0]->tipe;
        }

        // print_r($userProfile);
        // return redirect()->route('pariwisata');
    }

    public function logout(){
        session_unset();
        Session::flush();

        return redirect()->route('login');
    }
}
