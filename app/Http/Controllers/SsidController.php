<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Input, Redirect;
use App\BossApi;
use App\HTTP;


class SsidController extends Controller
{
    public function index()
    {
        $ssidProfiles = BossApi::ssidProfilesList()['ssid_profiles'];
        // dd($ssidProfiles);
        return view('layouts.admin.provisioning.ssid', get_defined_vars());

    }

    public function store()
    {

        $inputs = Input::all();


        $ssidProfileName = $inputs['ssidProfileName'];
        $ssidName = $inputs['ssidName'];
        $vlanId = $inputs['vlanId'];


        $data = [];
        $data["uid"] = "e9535450-770c-11e9-8c2b-0050568dc80b";
        $data["name"] = $ssidProfileName;
        $data["vlan"] = $vlanId;


        $url = 'http://'.env('BOSS_IP').':'.env('BOSS_PORT').'/boss/controller/v1/ssid';

        $json = json_encode($data);
        // dd($json);

        $result = HTTP::post($url,$json);

        if($result['http_code'] == 201){
            return Redirect::to('/ssids') ->with('success','The SSID Profile was created succesfully!');
        } else {
            return Redirect::to('/ssids') ->with('error','The SSID Profile was not created succesfully!'. $result['message']);
        }

    }

}
