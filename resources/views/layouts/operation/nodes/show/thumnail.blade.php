<div class="row">
    <div class="col-lg-4">
        <div class="view-header">

            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-plugin"></i>
            </div>
            <div class="header-title">

                <medium>
                    Packets Processed
                </medium>
                <h3 class="m-b-xs" title="packetsProcessed" >{{ $systemStatistcs['packetsProcessed'] }}</h3>
            </div>
        </div>
        <hr>
    </div>

    <div class="col-lg-4">
        <div class="view-header">

            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-refresh"></i>
            </div>
            <div class="header-title">

                <medium>
                    Bytes Processed
                </medium>
                <h3 class="m-b-xs" title="bytesProcessed" >{{ $systemStatistcs['bytesProcessed'] }}</h3>
            </div>
        </div>
        <hr>
    </div>

    <div class="col-lg-4">
        <div class="view-header">

            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-back-2"></i>
            </div>
            <div class="header-title">

                <medium>
                    TCP Resets
                </medium>
                <h3 class="m-b-xs" title="tcpResets" >{{ $systemStatistcs['tcpResets'] }}</h3>
            </div>
        </div>
        <hr>
    </div>

    <div class="col-lg-4">
        <div class="view-header">

            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-plus"></i>
            </div>
            <div class="header-title">

                <medium>
                    TCP Flow Create
                </medium>
                <h3 class="m-b-xs" title="tcpFlowsCreated" >{{ $systemStatistcs['tcpFlowsCreated'] }}</h3>
            </div>
        </div>
        <hr>
    </div>

    <div class="col-lg-4">
        <div class="view-header">

            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-like"></i>
            </div>
            <div class="header-title">

                <medium>
                    Devices Active
                </medium>
                <h3 class="m-b-xs" title="devicesActive" >{{ $systemStatistcs['devicesActive'] }}</h3>
            </div>
        </div>
        <hr>
    </div>


    <div class="col-lg-4">
        <div class="view-header">

            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-signal"></i>
            </div>
            <div class="header-title">

                <medium>
                    Networks Active
                </medium>
                <h3 class="m-b-xs" title="cpesActive" >{{ $systemStatistcs['cpesActive'] }}</h3>
            </div>
        </div>
        <hr>
    </div>

</div>