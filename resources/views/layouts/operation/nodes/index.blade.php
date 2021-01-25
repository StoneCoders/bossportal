@extends('layouts.admin.master')
@section('content')


<style type="text/css">
.success{
    color: #40B34E;
}

.warning{
    color: #FF5B00;
}

.danger{
    color: #F33734;
}

td .fa  {
    text-align: center;
}


</style>


<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">

                </div>
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-network"></i>
                </div>
                <div class="header-title">
                    <h3 class="m-b-xs">Nodes</h3>
                    <small>
                        This section will summarize all the Nodes
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
                                <th>ID</th>
                                <th>Zone</th>
                                <th>IP Address</th>
                                <th>Port</th>
                                <th>Type</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="/nodes/1?ip=172.18.29.245&port=8008&nodeId={{ urlencode('Sumesh\'s Zuse') }}">Sumesh's Zuse</a></td>
                                <td>Boston</td>
                                <td>172.18.29.245</td>
                                <td>8008</td>
                                <td>XMEG-1</td>
                                <td><i class="success fa fa-fw fa-sm fa-circle"></i></td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td><a href="/nodes/1?ip=172.18.22.240&port=8008&nodeId={{ urlencode('Andrew\'s Zuse') }}">Andrew's Zuse</a></td>
                                <td>NewYork</td>
                                <td>172.18.22.240</td>
                                <td>8008</td>
                                <td>XMEG-1</td>
                                <td><i class="success fa fa-fw fa-sm fa-circle"></i></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td><a href="/nodes/1?ip=172.18.29.241&port=8008&nodeId={{ urlencode('H5QFXC2') }}">H5QFXC2</a></td>
                                <td>Billerica</td>
                                <td>172.18.29.241</td>
                                <td>8008</td>
                                <td>XMEG-1</td>
                                <td><i class="success fa fa-fw fa-sm fa-circle"></i></td>
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
