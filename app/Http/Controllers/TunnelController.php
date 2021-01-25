<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Input, Redirect;
use App\BossApi;
use App\HTTP;



class TunnelController extends Controller
{
    public function index()
    {
        $cpeProfiles = BossApi::cpeProfilesList()['cpe_profiles'];
        return view('layouts.admin.provisioning.tunnel', get_defined_vars());
    }

    public function store()
    {

        $inputs = Input::all();

        $tunnelProfileName = $inputs['tunnelProfileName'];
        $tunnelMAC         = $inputs['tunnelMAC'];
        $tunnelType        = $inputs['tunnelType'];
        $tunnelSourceIP    = $inputs['tunnelSourceIP'];
        $tunnelDestIP      = $inputs['tunnelDestIP'];
        $tunnelSourcePort  = $inputs['tunnelSourcePort'];
        $tunnelDestPort    = $inputs['tunnelDestPort'];

        $data                    = [];
        $data["uid"]             = "e9535450-770c-11e9-8c2b-0050568dc80b";
        $data["name"]            = $tunnelProfileName;
        $data["encap_type"]      = $tunnelType;
        $data["source_ip"]       = $tunnelSourceIP;
        $data["tunnel_endpoint"] = $tunnelDestIP;
        $data["tunnel_mac"]      = $tunnelMAC;
        $data["udp_sport"]       = $tunnelSourcePort;
        $data["udp_dport"]       = $tunnelDestPort;

        $url = 'http://'.env('BOSS_IP').':'.env('BOSS_PORT').'/boss/controller/v1/cpe';

        $json = json_encode($data);
        // dd($json);

        $result = HTTP::post($url,$json);

        if($result['http_code'] == 201){
            return Redirect::to('/tunnels') ->with('success','The Tunnel Profile was created succesfully!');
        } else {
            return Redirect::to('/tunnels') ->with('error','The Tunnel Profile was not created succesfully!'. $result['message']);
        }

    }

}
