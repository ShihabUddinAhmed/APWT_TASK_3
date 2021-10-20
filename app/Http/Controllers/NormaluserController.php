<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Normaluser;

class NormaluserController extends Controller
{
    public function login()
    {
        return view('pages.user.login');
    }

    public function loginSubmit(Request $rqst)
    {
        $validate = $rqst->validate(
            [
                'username'=>'required|string',
                'password'=>'required|string'
            ]
            );
        $var = Normaluser::where('u_username', $rqst->username)
                            ->where('u_password', md5($rqst->password))
                            ->first();
        if($var)
        {
            $rqst->session()->put('uid', $var->id);
            return redirect()->route('user.dashboard');
        }
        return back();
        

    }

    public function logout(){
        session()->forget('uid');
        return redirect()->route('user.login');
    }

    public function registration()
    {
        return view('pages.user.registration');
    }

    public function register(Request $rqst)
    {
        $validate=$rqst->validate(
            [
                'name'=>'required|min:5|string',
                'username'=>'required|min:5|string|unique:normalusers,u_username',
                'email'=>'required|email',
                'dob'=>'required',
                'password'=>'required|min:8|string'
            ]
            );
        $var = new Normaluser();
        $var->u_name = $rqst->name;
        $var->u_username = $rqst->username;
        $var->u_email = $rqst->email;
        $var->u_password = md5($rqst->password);
        $var->u_dob = $rqst->dob;
        $var->save();
        return redirect()->route('home');
    }

    public function dashboard()
    {
        $var = Normaluser::where('id',session()->get('uid'))->first();
        return view('pages.user.dashboard')->with('user', $var);
    }

    public function profile()
    {
        $var=Normaluser::where('id',session()->get('uid'))->first();
        return view('pages.user.profile')->with('user',$var);
    }

    public function edit()
    {
        $var=Normaluser::where('id',session()->get('uid'))->first();
        return view('pages.user.edit')->with('user',$var);
    }

    public function editSubmit(Request $rqst)
    {
        $validate=$rqst->validate(
            [
                'name'=>'required|min:5|string',
                'email'=>'required|email',
                'dob'=>'required',
            ]
            );

        $var = Normaluser::where('id',session()->get('uid'))->first();
        $var->u_name = $rqst->name;
        $var->u_email = $rqst->email;
        $var->u_dob = $rqst->dob;
        $var->save();
        return redirect()->route('user.profile');
    }
}
