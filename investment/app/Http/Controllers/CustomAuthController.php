<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{

    public function index() {
        if(Auth::check()){
            return redirect('/');
        }
        return view("pages.login");
    }

    public function checkUser(Request $req){
        $this->loginValidation($req);
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
            return redirect('/admin/dashboard');
        }
        return redirect('/login');
    }

    public function registerView(){
        if(Auth::check()){
            return redirect('/');
        }
        return view("pages.register");
    }

    public function registerUser(Request $req) {
        $this->validation($req);
        $req['password'] = bcrypt($req->password);
        User::create($req->all());
        return redirect('/');
    }

    public function loginValidation($req){
        return $this->validate($req, [
            'email'=> 'required|email|max:100',
            'password'=> 'required|max: 25'
        ]);
    }

    public function validation($req){
        return $this->validate($req, [
            'name'=> 'required|max:100',
            'email'=> 'required|email|unique:users|max:100',
            'phone'=> 'required|numeric|digits_between:10,12',
            'password'=> 'required|max: 25'
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
