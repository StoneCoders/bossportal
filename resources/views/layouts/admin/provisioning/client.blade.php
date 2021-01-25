@extends('layouts.admin.master')
@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">


                    <button type="button" name="launchClientModal" class="btn btn-success" data-toggle="modal" data-target="#launchClientModal"> Create</button>

                    <div class="modal fade" id="launchClientModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title">Create client profiles</h4>
                                    <small>anything you want to add here.</small>
                                </div>
                                <div class="modal-body">


                                        {!! Form::open(array('class' => 'form-horizontal', 'role' =>'form', 'action'=> 'ClientController@store', 'files' => true )) !!}

                                        <div class="form-group row"><label for="clientProfileName" class="col-sm-6 col-form-label">Client Profile Name </label>
                                            <div class="col-sm-6"><input type="text" name ="clientProfileName" class="form-control" id="clientProfileName" placeholder="synth-001"></div>
                                        </div>
                                        <div class="form-group row"><label for="clientMAC" class="col-sm-6 col-form-label">Client MAC </label>
                                            <div class="col-sm-6"><input type="text" name="clientMAC" class="form-control" id="clientMAC" placeholder="001122334455"></div>
                                        </div>
                                        <div class="form-group row"><label for="clientMode" class="col-sm-6 col-form-label">Client Mode</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="clientMode" name="clientMode">
                                                    <option>SPWIFI</option>
                                                    <option>DSLITE</option>
                                                    <option>MBN-PRIVATE</option>
                                                    <option>MBN-GUEST</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row"><label for="clientType" class="col-sm-6 col-form-label">Client Type</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" id="clientType" name="clientType">
                                                    <option>IPv4</option>
                                                    <option>DUALSTACK-SLAAC</option>
                                                    <option>DUALSTACK</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row"><label for="portalUsername" class="col-sm-6 col-form-label">Captive Portal Username </label>
                                            <div class="col-sm-6"><input type="text" name="portalUsername" class="form-control" id="portalUsername" placeholder="wifisynth12"></div>
                                        </div>
                                        <div class="form-group row"><label for="portalPassword" class="col-sm-6 col-form-label">Captive Portal Password </label>
                                            <div class="col-sm-6"><input type="password" name="portalPassword" class="form-control" id="portalPassword" placeholder="******"></div>
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
                    <h3 class="m-b-xs">Client Profiles</h3>
                    <small>
                        This section will list all the Client Profiles
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
                                  <th>Mode</th>
                                  <th>Client MAC</th>
                                  <th>Type</th>
                                  <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $x = 1 ?>
                              @foreach($clientProfiles as $client)

                                  <tr>

                                      <td>{{ $x++ }}</td>
                                      <td>{{ $client['name'] }}</td>
                                      <td>{{ $client['flow_type'] }}</td>
                                      <td>{{ $client['mac_address'] }}</td>
                                      <td>{{ $client['subscriber_type'] }}</td>
                                      <td>
                                          <a href="#" class="btn btn-info btn-xs">View</a>
                                          <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                          <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                      </td>
                                  </tr>

                              @endforeach
                      </table>
                  </div>
              </div>
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
                                <th>Mode</th>
                                <th>Client MAC</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>CMST_GREv4_Woburn</td>
                                <td>SPWIFI</a></td>
                                <td>10:00:00:00:11:22</td>
                                <td>IPv4</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Cox_GREv6_Denver</td>
                                <td>DSLITE</a></td>
                                <td>76:00:AB:00:11:25</td>
                                <td>DUALSTACK</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Lbrty_L2TPv3UDP_POL</td>
                                <td>MBN-PRIVATE</a></td>
                                <td>23:00:65:00:11:97</td>
                                <td>DUALSTACK-SLAAC</td>
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
