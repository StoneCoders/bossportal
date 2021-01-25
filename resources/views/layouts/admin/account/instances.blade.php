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

<table class="table table-hover table-striped table-bordered table-sm table-responsive-sm">
    <thead>
        <tr>
            <th >VNF Instances</th>
            <th width="500px">Image Name</th>
            <th>Number of Cores</th>
            <th>RAM</th>
            <th>HDD</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="/accounts/1001/vnf/1/details">VNF-Mgr</a></td>
            <td>VNF.ova</td>
            <td>1</td>
            <td>4G</td>
            <td>8G</td>
            <td><i class="success fa fa-fw fa-sm fa-circle"></i></td>
            <td>Start</td>
        </tr>
        <tr>
            <td><a href="/accounts/1001/vnf/1/details">Benu vMEG</a></td>
            <td>Benu-MegAPP-7_1.ova</td>
            <td>3</td>
            <td>12G</td>
            <td>32G</td>
            <td><i class="success fa fa-fw fa-sm fa-circle"></i></td>
            <td>Stop</td>
        </tr>
        <tr>
            <td><a href="/accounts/1001/vnf/1/details">BOSS</a></td>
            <td>BOSS.ova</td>
            <td>1</td>
            <td>8G</td>
            <td>16G</td>
            <td><i class="warning fa fa-fw fa-sm fa-circle"></i></td>
            <td>Terminate</td>
        </tr>
        <tr>
            <td><a href="/accounts/1001/vnf/1/details">FortiGateway</a></td>
            <td>FortiGateway.ova</td>
            <td>1</td>
            <td>4G</td>
            <td>4G</td>
            <td><i class="danger fa fa-fw fa-sm fa-circle"></i></td>
            <td>Heal</td>
        </tr>
        <tr>
            <td><a href="/accounts/1001/vnf/1/details">SSC</a></td>
            <td>SSC.ova</td>
            <td>8</td>
            <td>64G</td>
            <td>100G</td>
            <td><i class="success fa fa-fw fa-sm fa-circle"></i></td>
            <td>Upgrade</td>
        </tr>

    </tbody>
</table>

@stop

@section('custom-scripts')

<script type="text/javascript">

</script>

</script>
@stop
