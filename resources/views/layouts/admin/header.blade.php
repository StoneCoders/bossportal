<!-- Header-->
<nav class="navbar navbar-expand-md navbar-default fixed-top">
    <div class="navbar-header">
        <div id="mobile-menu">
            <div class="left-nav-toggle">
                <a href="#">
                    <i class="stroke-hamburgermenu"></i>
                </a>
            </div>
        </div>
        <a class="navbar-brand" href="index.html">
            BOSS
        </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <div class="left-nav-toggle">
            <a href="">
                <i class="stroke-hamburgermenu"></i>
            </a>
        </div>
    </div>


    <ul class="nav navbar-nav">

        <li class="nav-item profil-link">
            <a href="login.html">
                <span class="profile-address">{{ Auth::user()->email }}</span>
                <img src="/luna/images/profile-{{ Auth::user()->id }}.png" class="rounded-circle" alt="">
            </a>
        </li>
    </ul>



</nav>
<!-- End header-->
