@extends('layouts.admin.master')
@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">


                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#launchSsidModal"> Create</button>


                    <div class="modal fade" id="launchSsidModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title">Create SSID profiles</h4>
                                    <small>anything you want to add here.</small>
                                </div>
                                <div class="modal-body">

                                    {!! Form::open(array('class' => 'form-horizontal', 'role' =>'form', 'action'=> 'SsidController@store', 'files' => true )) !!}

                                        <div class="form-group row"><label for="ssidProfileName" class="col-sm-6 col-form-label">Profile Name </label>
                                            <div class="col-sm-6"><input type="text" name ="ssidProfileName" class="form-control" id="ssidProfileName" placeholder="Benu-Office"></div>
                                        </div>
                                        <div class="form-group row"><label for="ssidName" class="col-sm-6 col-form-label">SSID Name </label>
                                            <div class="col-sm-6"><input type="text" name ="ssidName" class="form-control" id="ssidName" placeholder="Benu-OfficeWifi"></div>
                                        </div>
                                        <div class="form-group row"><label for="vlanId" class="col-sm-6 col-form-label">VLAN ID </label>
                                            <div class="col-sm-6"><input type="number" name="vlanId" class="form-control" id="vlanId" placeholder="100"></div>
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
                    <h3 class="m-b-xs">SSID Profiles</h3>
                    <small>
                        This section will list all the SSID Profiles
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
                                  <th>SSID Name</th>
                                  <th>VLAN ID</th>
                                  <td>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $x = 1 ?>
                              @foreach($ssidProfiles as $ssid)

                                  <tr>

                                      <td>{{ $x++ }}</td>
                                      <td> TBD Surya </td>
                                      <td>{{ $ssid['name'] }}</td>
                                      <td>{{ $ssid['vlan'] }}</td>
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
                                <th>SSID Name</th>
                                <th>VLAN ID</th>
                                <td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>CMST_wifi-1</td>
                                <td>xfinityWifi</a></td>
                                <td>100</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Cox_profile-1</td>
                                <td>CoxWifi</a></td>
                                <td>451</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Liberty-wifi-profile</td>
                                <td>SMB_Public_wifi</a></td>
                                <td>567</td>
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
