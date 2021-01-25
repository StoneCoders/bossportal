<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Input, Redirect;
use App\BossApi;
use App\HTTP;



class ClientController extends Controller
{
    public function index()
    {
        $clientProfiles = BossApi::clientProfilesList()['ue_profiles'];
        // dd($clientProfiles);
        return view('layouts.admin.provisioning.client', get_defined_vars());
    }

    public function store()
    {
        // dd('HERE');
        $inputs = Input::all();

        $clientProfileName = $inputs['clientProfileName'];
        $clientMAC         = $inputs['clientMAC'];
        $clientMode        = $inputs['clientMode'];
        $clientType        = $inputs['clientType'];
        $portalUsername    = $inputs['portalUsername'];
        $portalPassword    = $inputs['portalPassword'];


        $data                    = [];
        $data["uid"]             = "b31d15ac-738c-11e9-955f-0050568dc80b";
        $data["name"]            = $clientProfileName;
        $data["flow_type"]       = $clientMode;
        $data["subscriber_type"] = $clientType;
        $data["username"]        = $portalUsername;
        $data["mac_address"]     = $clientMAC;
        $data["password"]        = $portalPassword;

        $url = 'http://'.env('BOSS_IP').':'.env('BOSS_PORT').'/boss/controller/v1/ue';

        $json = json_encode($data);
        // dd($json);

        $result = HTTP::post($url,$json);

        if($result['http_code'] == 201){
            return Redirect::to('/clients') ->with('success','The Client Profile was created succesfully!');
        } else {
            return Redirect::to('/clients') ->with('error','The Client Profile was not created succesfully!'. $result['message']);
        }

    }

}
