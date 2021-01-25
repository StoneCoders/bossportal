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


    <div id="chart-container"></div>

    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">

                </div>
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-monitor"></i>
                </div>
                <div class="header-title">
                    <h3 class="m-b-xs">{{ strtoupper($instanceId) }}</h3>
                    <small>
                        This section will summarize the specific Node
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
                    <div class="panel-heading"> Interface Statistics </div>
                        <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>MAC</th>
                                <th>Type</th>
                                <th>Model</th>
                                <th>Source</th>
                                <th>RX bytes</th>
                                <th>RX packets</th>
                                <th>TX bytes</th>
                                <th>TX packets</th>
                                <th>TX Error</th>
                                <th>TX Drop</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if(count($vnfDataInterfaces) > 0 )

                            <?php $x = 1; ?>
                            @foreach($vnfDataInterfaces as $vnfDataInterface)

                            <tr>
                                <td>{{ $x++ }}</td>
                                <td>{{ $vnfDataInterface['iface_name'] }}</td>
                                <td>{{ $vnfDataInterface['mac'] }}</td>
                                <td>{{ $vnfDataInterface['type'] }}</td>
                                <td>{{ $vnfDataInterface['model'] }}</td>
                                <td>{{ $vnfDataInterface['source'] }}</td>
                                <td>{{ $vnfDataInterface['rx_bytes'] }}</td>
                                <td>{{ $vnfDataInterface['rx_packets'] }}</td>
                                <td>{{ $vnfDataInterface['tx_bytes'] }}</td>
                                <td>{{ $vnfDataInterface['tx_packets'] }}</td>
                                <td>{{ $vnfDataInterface['tx_err'] }}</td>
                                <td>{{ $vnfDataInterface['tx_drop'] }}</td>
                            </tr>

                            @endforeach
                            @else
                            <tr class="text-center">
                                <td colspan="12">
                                    <br>
                                    No data ...
                                </td>

                            </tr>


                            @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>




</div>
@stop

@section('custom-scripts')

</script>
@stop
