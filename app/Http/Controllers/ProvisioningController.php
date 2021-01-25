<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\BossApi;

class ProvisioningController extends Controller
{

    // public function clients()
    // {
    //     $clientProfiles = BossApi::clientProfilesList()['ue_profiles'];
    //     // dd($clientProfiles);
    //     return view('layouts.admin.provisioning.client', get_defined_vars());
    // }
    public function trafficProfiles()
    {
        $trafficProfiles = BossApi::trafficProfilesList()['profiles'];
        // dd($trafficProfiles);
        return view('layouts.admin.provisioning.trafficProfile', get_defined_vars());
    }
    // public function captivePortal()
    // {
    //     $portalProfiles = BossApi::portalProfilesList()['profiles'];
    //     // dd($portalProfiles);
    //
    //     return view('layouts.admin.provisioning.captivePortal', get_defined_vars());
    // }


}
