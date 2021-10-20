<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Normaluser;

class AdminController extends Controller
{
    public function login()
    {
        return view('pages.admin.login');
    }
    public function loginSubmit(Request $rqst)
    {
        $validate = $rqst->validate(
            [
                'username' => 'required|string',
                'password' => 'required|string'
            ]
            );
        $var = Admin::where('a_username', $rqst->username)
                    ->where('a_password', md5($rqst->password))
                    ->first();
        if($var)
        {
            $rqst->session()->put('aid', $var->id);
            return redirect()->route('admin.dashboard');
        }
        return back();
    }

    public function logout(){
        session()->forget('aid');
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        $admin = Admin::where('id', session()->get('aid'))->first();
        $users = Normaluser::all();
        
        return view('pages.admin.dashboard')->with('admin',$admin)
                                            ->with('users',$users);
    }

    public function profile()
    {
        $admin = Admin::where('id', session()->get('aid'))->first();
        return view('pages.admin.profile')->with('admin', $admin);
    }

    public function edit()
    {
        $var=admin::where('id',session()->get('aid'))->first();
        return view('pages.admin.edit')->with('admin',$var);
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

        $var = Admin::where('id',session()->get('aid'))->first();
        $var->a_name = $rqst->name;
        $var->a_email = $rqst->email;
        $var->a_dob = $rqst->dob;
        $var->save();
        return redirect()->route('admin.profile');
    }

    public function userdetails(Request $rqst)
    {
        $var=Normaluser::where('id',$rqst->id)->first();
        return view('pages.admin.userdetails')->with('user',$var);
    }

    public function editUser(Request $rqst)
    {
        $var=Normaluser::where('id', $rqst->id)->first();
        return view('pages.admin.useredit')->with('user',$var);
    }

    public function editUserSubmit(Request $rqst)
    {
        $validate=$rqst->validate(
            [
                'name'=>'required|min:5|string',
                'email'=>'required|email',
                'dob'=>'required',
            ]
            );

        $var = Normaluser::where('id',$rqst->id)->first();
        $var->u_name = $rqst->name;
        $var->u_email = $rqst->email;
        $var->u_dob = $rqst->dob;
        $var->save();
        return redirect()->route('admin.dashboard');
    }

    public function deleteUser(Request $rqst)
    {
        $var = Normaluser::where('id',$rqst->id)->first();
        $var->delete();
        return redirect()->route('admin.dashboard');
    }
}
