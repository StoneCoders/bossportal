<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input, Session, Auth, Redirect, Validator;

class AccountController extends Controller
{

    public function login()
    {
        return view('layouts.login');
    }

    public function postLogin()
    {

        $email = strtolower(Input::get('email'));
        $password = Input::get('password');

        $validator = Validator::make(Input::only('email', 'password') , array(
            'email' => 'required',
            'password' => 'required'
        ));

        if ($validator->fails()) {
            return Redirect::to('/')->with('error', 'Please fill out your information ')->withErrors($validator)->withInput();
        }

        $auth = Auth::attempt(array(
            'email' => $email,
            'password' => $password,
            'active' => 1
        ));

        if ($auth) {

            return Redirect::to('/dashboard')->with('success', 'You have been successfully logged in.');

        } else {
            return Redirect::to('/')->with('error', 'Username/Password Wrong')->with('email', $email)->withErrors($validator);
        }

    }

    public function logout()
    {

        Session::flush();
        Auth::logout();

        return Redirect::to(env('APP_URL').'/')->with('success', 'You have successfully logged out.');
    }

    public function dashboard()
    {
        return view('layouts.admin.dashboard.index',get_defined_vars());
    }


    public function index()
    {
        return view('layouts.admin.account.index');
    }

    public function instances()
    {
        return view('layouts.admin.account.instances');
    }

    public function details()
    {
        return view('layouts.admin.account.details');
    }



}
