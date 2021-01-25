<?php
namespace App;

class BossApi {

    public static function cpeProfilesList() {

        $url = env('BOSS_IP').':'.env('BOSS_PORT').'/boss/controller/v1/cpe?uid=e9535450-770c-11e9-8c2b-0050568dc80b';
        $data = HTTP::get($url);

        if ($data['status'] == 200) {
            return  $data;
        }

        return  null;

    }

    public static function portalProfilesList() {

        $url = env('BOSS_IP').':'.env('BOSS_PORT').'/boss/controller/v1/captive_portal_profile?uid=b31d15ac-738c-11e9-955f-0050568dc80b';
        $data = HTTP::get($url);

        if ($data['status'] == 200) {
            return  $data;
        }

        return  null;

    }

    public static function ssidProfilesList() {

        $url = env('BOSS_IP').':'.env('BOSS_PORT').'/boss/controller/v1/ssid?uid=e9535450-770c-11e9-8c2b-0050568dc80b';
        $data = HTTP::get($url);

        if ($data['status'] == 200) {
            return  $data;
        }

        return  null;

    }

    public static function trafficProfilesList() {

        $url = env('BOSS_IP').':'.env('BOSS_PORT').'/boss/controller/v1/traffic_profile?uid=b31d15ac-738c-11e9-955f-0050568dc80b';
        $data = HTTP::get($url);

        if ($data['status'] == 200) {
            return  $data;
        }

        return  null;

    }

    public static function clientProfilesList() {

        $url = env('BOSS_IP').':'.env('BOSS_PORT').'/boss/controller/v1/ue?uid=b31d15ac-738c-11e9-955f-0050568dc80b';
        $data = HTTP::get($url);

        if ($data['status'] == 200) {
            return  $data;
        }

        return  null;

    }


    public static function vnfInstances($host) {

        $url = $host.'/api/running/benu/vnflcm/vnf_instances';
        $data = HTTP::getBasicAuth($url, 'admin', 'admin','application/vnd.yang.collection+json');


        if (count($data) > 0) {
            return  $data;
        }

        return  null;

    }

    public static function vnfInstanceState($host) {

        $url = $host.'/api/running/benu/vnflcm/vnf_instances/';
        $data = HTTP::getBasicAuth($url, 'admin', 'admin','application/vnd.yang.collection+json');


        if (count($data) > 0) {
            return  $data;
        }

        return  null;

    }

    public static function vnflcm($host) {

        $url = $host.'/api/running/benu/vnflcm';
        $data = HTTP::getBasicAuth($url, 'admin', 'admin','application/vnd.yang.data+json');

        if (count($data) > 0) {
            return  $data;
        }

        return  null;

    }

    public static function vnfDataInterfaces($host, $instanceName) {

        $url = $host.'/api/running/benu/vnflcm/vnf_instances/'.$instanceName.'/vnfData/interfaces';
        $data = HTTP::getBasicAuth($url, 'admin', 'admin','application/vnd.yang.collection+json');

        if (count($data) > 0) {
            return  $data;
        }

        return  null;

    }


    public static function systemStatistcs($ip, $port) {

        $url = $ip.':'.$port.'/vrg/system_statistcs';
        $data = HTTP::get($url);

        if ($data['status'] == 200) {
            return  $data;
        }

        return  null;

    }

}
