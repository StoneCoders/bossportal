@extends('layouts.admin.master')
@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">


                    <button type="button" name="launchPortalModal" class="btn btn-success" data-toggle="modal" data-target="#launchPortalModal"> Create</button>


                    <div class="modal fade" id="launchPortalModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title">Create captive portal profiles</h4>
                                    <small>anything you want to add here.</small>
                                </div>
                                <div class="modal-body">


                                        {!! Form::open(array('class' => 'form-horizontal', 'role' =>'form', 'action'=> 'CaptivePortalController@store', 'files' => true )) !!}

                                        <div class="form-group row"><label for="portalProfileName" class="col-sm-6 col-form-label">Captive Portal Profile Name </label>
                                            <div class="col-sm-6"><input type="text" name ="portalProfileName" class="form-control" id="portalProfileName" placeholder="Cmst-Woburn-portal-2"></div>
                                        </div>
                                        <div class="form-group row"><label for="usernameId" class="col-sm-6 col-form-label">Username Attribute ID </label>
                                            <div class="col-sm-6"><input type="text" name="usernameId" class="form-control" id="usernameId" placeholder=""></div>
                                        </div>
                                        <div class="form-group row"><label for="usernameValue" class="col-sm-6 col-form-label">Username Attribute Value </label>
                                            <div class="col-sm-6"><input type="text" name="usernameValue" class="form-control" id="usernameValue" placeholder=""></div>
                                        </div>
                                        <div class="form-group row"><label for="passwordId" class="col-sm-6 col-form-label">Password Attribute ID </label>
                                            <div class="col-sm-6"><input type="text" name="passwordId" class="form-control" id="passwordId" placeholder=""></div>
                                        </div>
                                        <div class="form-group row"><label for="passwordValue" class="col-sm-6 col-form-label">Password Attribute Value </label>
                                            <div class="col-sm-6"><input type="text" name="passwordValue" class="form-control" id="passwordValue" placeholder=""></div>
                                        </div>
                                        <div class="form-group row"><label for="submitId" class="col-sm-6 col-form-label">Submit Attribute ID </label>
                                            <div class="col-sm-6"><input type="text" name="submitId" class="form-control" id="submitId" placeholder=""></div>
                                        </div>
                                        <div class="form-group row"><label for="submitValue" class="col-sm-6 col-form-label">Submit Attribute Value </label>
                                            <div class="col-sm-6"><input type="text" name="submitValue" class="form-control" id="submitValue" placeholder=""></div>
                                        </div>
                                        <div class="form-group row"><label for="loginSuccessMessage" class="col-sm-6 col-form-label">Login Success Message </label>
                                            <div class="col-sm-6"><input type="text" name="loginSuccessMessage" class="form-control" id="loginSuccessMessage" placeholder=""></div>
                                        </div>
                                        <div class="form-group row"><label for="logoutUrl" class="col-sm-6 col-form-label">Logout URL </label>
                                            <div class="col-sm-6"><input type="url" name="logoutUrl" class="form-control" id="logoutUrl" placeholder="http://www.xfinity.com/logout"></div>
                                        </div>
                                        <div class="form-group row"><label for="logoutSuccessMessage" class="col-sm-6 col-form-label">Logout Success Message </label>
                                            <div class="col-sm-6"><input type="text" name="logoutSuccessMessage" class="form-control" id="logoutSuccessMessage" placeholder=""></div>
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
                    <h3 class="m-b-xs">Captive Portal Profiles</h3>
                    <small>
                        This section will list all the Captive Portal Profiles
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
                                <th>Username</th>
                                <th>Password</th>
                                <th>Logout URL</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $x = 1 ?>
                            @foreach($portalProfiles as $portal)

                                <tr>

                                    <td>{{ $x++ }}</td>
                                    <td>{{ $portal['name'] }}</a></td>
                                    <td>{{ $portal['username_element_value'] }}</td>
                                    <td>{{ $portal['password_element_value'] }}</td>
                                    <td>{{ $portal['logout_url'] }}</td>
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
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Logout URL</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>1</td>
                                <td>Telenet_MBN_Guest</td>
                                <td>bel98</a></td>
                                <td>abc#$</td>
                                <td>http://wwww.telenet.com/logout</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Woburn_Spwifi</td>
                                <td>wifisynth33</a></td>
                                <td>Synth23!</td>
                                <td>http://wwww.xfinity.com/logout</td>
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
