<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AdminAccountsController extends Controller
{
    public function login_form(){
        return view('manager.login');
    }

    public function admin_login(Request $request){
        $username = $request->username;
        $password = $request->password;
        if (Auth::guard('admin')->attempt(['username' => $username, 'password' => $password])) {
            $request->session()->regenerate();
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('admin.adminLoginForm')->with('msg','Username or Password incorrect');
        }
    }
    public function admin_logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.adminLoginForm');
    }
    public function showListAdmin(){
        if(Auth::guard('admin')->check()){
            $adminList = DB::table('admin_accounts')->select()->get();
            return view('manager.adminList')->with(compact('adminList'));
        }else{
            return redirect()->route('admin.adminLoginForm')->with('msg','Login with admin account first, please !!!');
        }
    }
}
