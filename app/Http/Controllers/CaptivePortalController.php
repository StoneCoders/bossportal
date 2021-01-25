<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Input, Redirect;
use App\BossApi;
use App\HTTP;



class CaptivePortalController extends Controller
{
    public function index()
    {
        $portalProfiles = BossApi::portalProfilesList()['profiles'];
        // dd($portalProfiles);

        return view('layouts.admin.provisioning.captivePortal', get_defined_vars());
    }

    public function store()
    {

        $inputs = Input::all();

        $loginSuccessMessage        = $inputs['loginSuccessMessage'];
        $logoutSuccessMessage       = $inputs['logoutSuccessMessage'];
        $portalProfileName          = $inputs['portalProfileName'];
        $logoutUrl                  = $inputs['logoutUrl'];
        $passwordId                 = $inputs['passwordId'];
        $passwordValue              = $inputs['passwordValue'];
        $submitId                   = $inputs['submitId'];
        $submitValue                = $inputs['submitValue'];
        $usernameId                 = $inputs['usernameId'];
        $usernameValue              = $inputs['usernameValue'];


        $data                           = [];
        $data["uid"]                    = "b31d15ac-738c-11e9-955f-0050568dc80b";
        $data["login_success_msg"]      = $loginSuccessMessage;
        $data["name"]                   = $portalProfileName;
        $data["logout_url"]             = $logoutUrl;
        $data["password_element_id"]    = $passwordId;
        $data["logout_success_msg"]     = $logoutSuccessMessage;
        $data["password_element_value"] = $passwordValue;
        $data["submit_button_id"]       = $submitId;
        $data["submit_button_value"]    = $submitValue;
        $data["username_element_id"]    = $usernameId;
        $data["username_element_value"] = $usernameValue;


        $url = 'http://'.env('BOSS_IP').':'.env('BOSS_PORT').'/boss/controller/v1/captive_portal_profile';

        $json = json_encode($data);
        // dd($json);

        $result = HTTP::post($url,$json);

        if($result['http_code'] == 201){
            return Redirect::to('/captivePortals') ->with('success','The Captive Portal Profile was created succesfully!');
        } else {
            return Redirect::to('/captivePortals') ->with('error','The Captive Portal Profile was not created succesfully!'. $result['message']);
        }

    }

}
