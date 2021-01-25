<!-- Navigation-->
<aside class="navigation">
    <nav>
        <ul class="nav luna-nav">

            <li class="{{{ strpos(Request::url(), 'dashboard')!==FALSE ? 'active' : ''}}}">
                <a href="/dashboard">Dashboard</a>
            </li>

            @if(Auth::user()->type == 'admin')
                <li class="{{{ strpos(Request::url(), 'accounts')!==FALSE ? 'active' : ''}}}">
                    <a href="/accounts">Accounts</a>
                </li>

            @elseif(Auth::user()->type == 'user')


                <li class="{{{ strpos(Request::url(), 'client-summary')!==FALSE ? 'active' : ''}}}">
                    <a href="/client-summary">Client Summary</a>
                </li>


                <li>
                    <a href="#provisioning" data-toggle="collapse" aria-expanded="true" class="">
                        Provisioning <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="provisioning" class="nav nav-second collapse show" style="">
                        <li><a href="/tunnels">Tunnels</a></li>
                        <li><a href="/clients">Clients</a></li>
                        <li><a href="/provisioning/trafficProfiles">Traffic Profiles</a></li>
                        <li><a href="/ssids">SSIDs</a></li>
                        <li><a href="/captivePortals">Captive Portals</a></li>
                    </ul>
                </li>

            @elseif(Auth::user()->type == 'operation')

                <li class="{{{ strpos(Request::url(), 'nodes')!==FALSE ? 'active' : ''}}}">
                    <a href="/nodes">Nodes</a>
                </li>

            @endif


            <li>
                <a href="/logout">Logout</a>
            </li>



        </ul>
    </nav>
</aside>
<!-- End navigation-->
