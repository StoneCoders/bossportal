@extends('layouts.admin.master')
@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">


                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#launchClientModal"> Launch Client</button>


                    <div class="modal fade" id="launchClientModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title">Select client settings before launching</h4>
                                    <small>anything you want to add here.</small>
                                </div>
                                <div class="modal-body">


                                    <form class="form-group">
                                        <div class="form-group row"><label for="clientProfile" class="col-sm-6 col-form-label">BOSS Client Profile</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="clientProfile">
                                                    <option>Woburn_SPwifi</option>
                                                    <option>Needham_SPwifi</option>
                                                    <option>Lowell_SPwifi</option>
                                                    <option>Billerica_SPwifi</option>
                                                    <option>Andover_SPwifi</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row"><label for="tunnelProfile" class="col-sm-6 col-form-label">Select Tunnel Profile</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="tunnelProfile">
                                                    <option>CMST_GREv4_Woburn</option>
                                                    <option>CMST_GREv4_Needham</option>
                                                    <option>CMST_GREv4_Lowell</option>
                                                    <option>CMST_GREv4_Billerica</option>
                                                    <option>CMST_GREv4_Andover</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row"><label for="ssidProfile" name="ssidProfile" class="col-sm-6 col-form-label">Select SSID Profile</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="ssidProfile">
                                                    <option>CMST_wifi-1</option>
                                                    <option>Cox_profile-1</option>
                                                    <option>Liberty-wifi-profile</option>
                                                    </select>
                                            </div>
                                        </div>

                                        <div class="form-group row"><label for="trafficProfile" class="col-sm-6 col-form-label">Select Traffic Profile</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="trafficProfile">
                                                    <option>Woburn-URLs</option>
                                                    <option>Needham-URLs</option>
                                                    <option>Lowell-URLs</option>
                                                    <option>Billerica-URLs</option>
                                                    <option>Andover-URLs</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row"><label for="captivePortalProfile" class="col-sm-6 col-form-label">Select Captive Portal Profile</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="captivePortalProfile">
                                                    <option>NewEngland Portals</option>
                                                    <option>California Portals</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-success">Launch</button>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-news-paper"></i>
                </div>
                <div class="header-title">
                    <h3 class="m-b-xs">Client Summary</h3>
                    <small>
                        This section will summarize all the BOSS client sessions
                    </small>
                </div>
            </div>
            <hr>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Session Name</th>
                                <th>VLAN</th>
                                <th>Tunnel Source IP</th>
                                <th>Tunnel Dest IP</th>
                                <th>MAC Address</th>
                                <th>Tunnel Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>SPWIFI</td>
                                <td><a href="/client-summary/1/show">Cmst-Woburn-001</a></td>
                                <td>100</td>
                                <td>10.10.10.1</td>
                                <td>20.10.10.1</td>
                                <td>100000001122</td>
                                <td>GRE</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>SPWIFI</td>
                                <td><a href="/client-summary/2/show">Cox-Nedham-001</a></td>
                                <td>200</td>
                                <td>17.20.10.122</td>
                                <td>20.10.10.1</td>
                                <td>100000001123</td>
                                <td>L2TPv3-IP</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>MBN-PRIVATE</td>
                                <td><a href="/client-summary/3/show">Vzn-SouCal-001</a></td>
                                <td>450</td>
                                <td>2001:4</td>
                                <td>2011:56:AC6</td>
                                <td>100000001124</td>
                                <td>GREv6</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>DSLITE</td>
                                <td><a href="/client-summary/4/show">Virgin-UK-451</a></td>
                                <td>-</td>
                                <td>9001:54</td>
                                <td>9011:156:AC6</td>
                                <td>100000001125</td>
                                <td>IP-IN-IP6</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>MBN-GUEST</td>
                                <td><a href="/client-summary/5/show">Telnt-BEL-601</a></td>
                                <td>551</td>
                                <td>34.56.21.54</td>
                                <td>76.74.32.56</td>
                                <td>100000001127</td>
                                <td>L2TPv3-UDP</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>MHN</td>
                                <td><a href="/client-summary/6/show">LBRTY-UK-661</a></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>100000001129</td>
                                <td>NONE</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@stop

@section('custom-scripts')

<script type="text/javascript">

</script>

</script>
@stop
