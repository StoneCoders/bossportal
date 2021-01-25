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
        <div class="col-md-12">

            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-user"></i>
                </div>
                <div class="header-title">
                    <h3 class="m-b-lg">Accounts</h3>
                    <small>
                        list all accounts from the admin portal
                    </small>
                </div>
            </div>
            <hr>

            <table class="table table-hover table-striped table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th>Account ID</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Licences</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="/accounts/1001/vnf/1/instances">1001</a></td>
                        <td>SPWIFI</td>
                        <td>Comcast Business</td>
                        <td>9786770861</td>
                        <td><i class="success fa fa-fw fa-sm fa-circle"></i></td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td><a href="/accounts/1002/vnf/1/instances">1002</a></td>
                        <td>SPWIFI</td>
                        <td>Mediacom Cable</td>
                        <td>6786770891</td>
                        <td><i class="success fa fa-fw fa-sm fa-circle"></i></td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td><a href="/accounts/1003/vnf/1/instances">1003</a></td>
                        <td>DSLITE</td>
                        <td>Virgin Media</td>
                        <td>8786770893</td>
                        <td><i class="success fa fa-fw fa-sm fa-circle"></i></td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td><a href="/accounts/1004/vnf/1/instances">1004</a></td>
                        <td>MBN</td>
                        <td>Telenet</td>
                        <td>3456770893</td>
                        <td><i class="success fa fa-fw fa-sm fa-circle"></i></td>
                        <td>7</td>
                    </tr>
                </tbody>
            </table>












        </div>
    </div>
</div>


@stop

@section('custom-scripts')

<script type="text/javascript">

</script>

@stop
