@extends('layouts.admin.master')
@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">


                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#launchTunnelModal"> Create</button>


                    <div class="modal fade" id="launchTunnelModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title">Create tunnel profiles</h4>
                                    <small>anything you want to add here.</small>
                                </div>
                                <div class="modal-body">

                                    {!! Form::open(array('class' => 'form-horizontal', 'role' =>'form', 'action'=> 'TunnelController@store', 'files' => true )) !!}

                                    <div class="form-group row"><label for="tunnelProfileName" class="col-sm-6 col-form-label">Tunnel Profile Name </label>
                                        <div class="col-sm-6"><input type="text" name ="tunnelProfileName" class="form-control" id="tunnelProfileName" placeholder="Cmst-Woburn-001"></div>
                                    </div>
                                    <div class="form-group row"><label for="tunnelMAC" class="col-sm-6 col-form-label">Tunnel MAC </label>
                                        <div class="col-sm-6"><input type="text" name="tunnelMAC" class="form-control" id="tunnelMAC" placeholder="001122334455"></div>
                                    </div>
                                    <div class="form-group row"><label for="tunnelType" class="col-sm-6 col-form-label">Tunnel Type</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" id="tunnelType" name="tunnelType">
                                                <option>GRE</option>
                                                <option>L2TPv3-IP
                                                    <option>GREv6</option>
                                                    <option>IP-IN-IP6</option>
                                                    <option>L2TPv3-UDP</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row"><label for="tunnelSourceIP" class="col-sm-6 col-form-label">Tunnel Source IP </label>
                                            <div class="col-sm-6"><input type="text" name="tunnelSourceIP" class="form-control" id="tunnelSourceIP" placeholder="10.34.54.87"></div>
                                        </div>
                                        <div class="form-group row"><label for="tunnelDestIP" class="col-sm-6 col-form-label">Tunnel Destination IP </label>
                                            <div class="col-sm-6"><input type="text" name="tunnelDestIP" class="form-control" id="tunnelDestIP" placeholder="34.23.65.76"></div>
                                        </div>
                                        <div class="form-group row"><label for="tunnelSourcePort" class="col-sm-6 col-form-label">Tunnel Source Port </label>
                                            <div class="col-sm-6"><input type="text" name="tunnelSourcePort" class="form-control" id="tunnelSourcePort" placeholder="1111"></div>
                                        </div>
                                        <div class="form-group row"><label for="tunnelDestPort" class="col-sm-6 col-form-label">Tunnel Destination Port </label>
                                            <div class="col-sm-6"><input type="text" name="tunnelDestPort" class="form-control" id="tunnelDestPort" placeholder="2222"></div>
                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>

                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-icon">
                        <i class="pe page-header-icon pe-7s-news-paper"></i>
                    </div>
                    <div class="header-title">
                        <h3 class="m-b-xs">Tunnel Profiles</h3>
                        <small>
                            This section will list all the Tunnel Profiles
                        </small>
                    </div>
                </div>
                <hr>
            </div>
        </div>

        <div id="tableExample2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
          <div class="row">
             <div class="col-sm-6">
                <div class="dataTables_length" id="tableExample2_length">
                   <label>
                      Show
                      <select name="tableExample2_length" aria-controls="tableExample2" class="form-control form-control-sm">
                         <option value="6">6</option>
                         <option value="25">25</option>
                         <option value="50">50</option>
                         <option value="-1">All</option>
                     </select>
                     entries
                 </label>
             </div>
         </div>
         <div class="col-sm-6">
            <div id="tableExample2_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="tableExample2"></label></div>
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
                                <th>Profile Name</th>
                                <th>Source IP</th>
                                <th>Dest IP</th>
                                <th>Source Port</th>
                                <th>Dest Port</th>
                                <th>MAC Address</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $x = 1 ?>
                            @foreach($cpeProfiles as $cpe)

                            <tr>

                                <td>{{ $x++ }}</td>
                                <td>{{ $cpe['name'] }}</a></td>
                                <td>{{ $cpe['source_ip'] }}</td>
                                <td>{{ $cpe['tunnel_endpoint'] }}</td>
                                <td>{{ $cpe['udp_sport'] }}</td>
                                <td>{{ $cpe['udp_dport'] }}</td>
                                <td>{{ $cpe['tunnel_mac'] }}</td>
                                <td>{{ $cpe['encap_type'] }}</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editTunnelModal-{{ str_replace(':','',$cpe['tunnel_mac']) }}">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>

                            <div class="modal fade show" id="editTunnelModal-{{ str_replace(':','',$cpe['tunnel_mac']) }}" tabindex="-1" role="dialog" aria-modal="true" style=" padding-left: 3.8147e-06px;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title">Create tunnel profiles</h4>
                                            <small>anything you want to add here.</small>
                                        </div>
                                        <div class="modal-body">

                                            <form method="POST" action="http://boss.test/tunnels/store" accept-charset="UTF-8" class="form-horizontal" role="form" enctype="multipart/form-data">
                                                <input name="_token" type="hidden" value="W79Z19UTz3xPQBozDsS96gQW6HzehWvMjuNoHsZv">

                                                <div class="form-group row">
                                                    <label for="tunnelProfileName" class="col-sm-6 col-form-label">Tunnel Profile Name </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="tunnelProfileName" class="form-control" id="tunnelProfileName" placeholder="Cmst-Woburn-001" value="{{ $cpe['name']  }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row"><label for="tunnelMAC" class="col-sm-6 col-form-label">Tunnel MAC </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="tunnelMAC" class="form-control" id="tunnelMAC" placeholder="001122334455"  value="{{ $cpe['tunnel_mac']  }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tunnelType" class="col-sm-6 col-form-label">Tunnel Type</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control" id="tunnelType" name="tunnelType">
                                                            <option>GRE</option>
                                                            <option>L2TPv3-IP
                                                            </option><option>GREv6</option>
                                                            <option>IP-IN-IP6</option>
                                                            <option>L2TPv3-UDP</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tunnelSourceIP" class="col-sm-6 col-form-label">Tunnel Source IP </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" name="tunnelSourceIP" class="form-control" id="tunnelSourceIP" placeholder="10.34.54.87" value="{{ $cpe['source_ip']  }}"></div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="tunnelDestIP" class="col-sm-6 col-form-label">Tunnel Destination IP </label>
                                                        <div class="col-sm-6">
                                                            <input type="text" name="tunnelDestIP" class="form-control" id="tunnelDestIP" placeholder="34.23.65.76" value="{{ $cpe['tunnel_endpoint']  }}"></div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="tunnelSourcePort" class="col-sm-6 col-form-label">Tunnel Source Port </label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="tunnelSourcePort" class="form-control" id="tunnelSourcePort" placeholder="1111" value="{{ $cpe['udp_sport']  }}" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="tunnelDestPort" class="col-sm-6 col-form-label">Tunnel Destination Port </label>
                                                            <div class="col-sm-6">
                                                                <input type="text" name="tunnelDestPort" class="form-control" id="tunnelDestPort" placeholder="2222" value="{{ $cpe['udp_dport']  }}" >
                                                            </div>
                                                        </div>


                                                    </form></div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                @include('layouts.admin.provisioning.tunnels.staticTable')

            </div>

        </div>
        @stop

        @section('custom-scripts')

        <script type="text/javascript">

        </script>

    </script>
    @stop
