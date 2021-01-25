<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Input, Redirect;
use App\BossApi;
use App\HTTP;

class NodeController extends Controller
{
    public function index()
    {
        return view('layouts.operation.nodes.index', get_defined_vars());
    }

    public function show()
    {

        $inputs          = Input::all();

        $ip              = $inputs['ip'];
        $port            = $inputs['port'];
        $nodeId          = $inputs['nodeId'];
        $host            = 'http://'.$ip.':'.$port;
        $vnfInstances    = BossApi::vnfInstances($host)['collection']['system:vnf_instances'];
        $vnflcm          = BossApi::vnflcm($host)['system:vnflcm'];

        // dd($vnfInstances);

        $sscPort         = '1235';
        $systemStatistcs = BossApi::systemStatistcs($ip,$sscPort)['data'];

        return view('layouts.operation.nodes.show', get_defined_vars());
    }

    public function action()
    {

        $inputs       = Input::all();
        $ip           = $inputs['ip'];
        $port         = $inputs['port'];
        $action       = $inputs['action'];

        $host         = 'http://'.$ip.':'.$port;
        $operation    = basename($inputs['action']);
        $url          = $host.$action;
        $data         = '';
        $result       = HTTP::postBasicAuth($url, $data, 'admin', 'admin');

        return $result;

    }

    public function summary()
    {

        $inputs            = Input::all();
        $ip                = $inputs['ip'];
        $port              = $inputs['port'];
        $instanceId        = $inputs['instanceId'];
        $host              = 'http://'.$ip.':'.$port;

        $vnfDataInterfaces = BossApi::vnfDataInterfaces($host, $instanceId)['collection']['system:interfaces'];

        return view('layouts.operation.nodes.summary', get_defined_vars());
    }

    // api/nodes/{id}/instances/{instanceId}/state
    public function instanceState($id, $instanceId)
    {

        $inputs            = Input::all();
        $ip                = $inputs['ip'];
        $port              = $inputs['port'];
        $instanceId        = $inputs['instanceId'];
        $host              = 'http://'.$ip.':'.$port;

        $vnfDataInterfaces = BossApi::vnfInstances($host)['collection']['system:vnf_instances'];

        return $vnfDataInterfaces;
    }


}
