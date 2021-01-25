@extends('layouts.admin.master')
@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">


                    <button type="button" name="launchTrafficModal" class="btn btn-success" data-toggle="modal" data-target="#launchTrafficModal"> Create</button>


                    <div class="modal fade" id="launchTrafficModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title">Create traffic profiles</h4>
                                    <small>anything you want to add here.</small>
                                </div>
                                <div class="modal-body">


                                    <form class="form-group">
                                        <div class="form-group row"><label for="trafficProfileName" class="col-sm-6 col-form-label">Traffic Profile Name </label>
                                            <div class="col-sm-6"><input type="text" name ="trafficProfileName" class="form-control" id="trafficProfileName" placeholder="Cmst-Woburn-dualstack"></div>
                                        </div>
                                        <div class="form-group row"><label for="speedtestFlag" class="col-sm-6 col-form-label">Speedtest </label>
                                          <div class="col-sm-6">
                                              <select class="form-control" id="tunnelType" name="tunnelType">
                                                  <option>Disabled</option>
                                                  <option>Enabled</option>
                                              </select>
                                          </div>
                                        </div>
                                        <div class="form-group row"><label for="ipv4BrowseUrl" class="col-sm-6 col-form-label">IPv4 Browsing URL </label>
                                            <div class="col-sm-6"><input type="url" name="ipv4BrowseUrl" class="form-control" id="ipv4BrowseUrl" placeholder="http://cnn.com"></div>
                                        </div>
                                        <div class="form-group row"><label for="ipv4UrlTitle" class="col-sm-6 col-form-label">IPv4 Web-URL Title </label>
                                            <div class="col-sm-6"><input type="text" name="ipv4UrlTitle" class="form-control" id="ipv4UrlTitle" placeholder="CNN"></div>
                                        </div>
                                        <div class="form-group row"><label for="ipv6BrowseUrl" class="col-sm-6 col-form-label">IPv6 Browsing URL </label>
                                            <div class="col-sm-6"><input type="url" name="ipv4BrowseUrl" class="form-control" id="ipv4BrowseUrl" placeholder="http://ipv6-test.com"></div>
                                        </div>
                                        <div class="form-group row"><label for="ipv6UrlTitle" class="col-sm-6 col-form-label">IPv6 Web-URL Title </label>
                                            <div class="col-sm-6"><input type="text" name="ipv6UrlTitle" class="form-control" id="ipv6UrlTitle" placeholder="IPv6 Test"></div>
                                        </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-news-paper"></i>
                </div>
                <div class="header-title">
                    <h3 class="m-b-xs">Traffic Profiles</h3>
                    <small>
                        This section will list all the Traffic Profiles
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
                                  <th>IPv4 URL</th>
                                  <th>IPv4 Webpage Title</th>
                                  <th>IPv6 URL</th>
                                  <th>IPv6 Webpage Title</th>
                                  <th>Speedtest</th>
                                  <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $x = 1 ?>
                              @foreach($trafficProfiles as $traffic)

                                  <tr>

                                      <td>{{ $x++ }}</td>
                                      <td>{{ $traffic['name'] }}</a></td>
                                      <td>{{ $traffic['ipv4_urls'][0][0] }}</td>
                                      <td>{{ $traffic['ipv4_urls'][0][1] }}</td>
                                      <td>{{ $traffic['ipv6_urls'][0][0] }}</td>
                                      <td>{{ $traffic['ipv6_urls'][0][1] }}</td>
                                      <td>{{ $traffic['enable_speedtest'] }}</td>
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
                                <th>IPv4 URL</th>
                                <th>IPv4 Webpage Title</th>
                                <th>IPv6 URL</th>
                                <th>IPv6 Webpage Title</th>
                                <th>Speedtest</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Telenet_MBN</td>
                                <td>bbc.uk</a></td>
                                <td>BBC</td>
                                <td>ipv6.youtube.com</td>
                                <td>Youtube</td>
                                <td>Enabled</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Woburn SPwifi</td>
                                <td>xfinity.com</a></td>
                                <td>Xfinity</td>
                                <td>ipv6test.com</td>
                                <td>IPv6Test</td>
                                <td>Disabled</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-xs">View</a>
                                    <a href="#" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>

                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>VirginMD DSLITE</td>
                                <td>espn.com</a></td>
                                <td>ESPN</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Enabled</td>
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
