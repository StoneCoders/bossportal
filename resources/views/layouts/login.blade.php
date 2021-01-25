<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>BOSS</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="/luna/vendor/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="/luna/vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="/luna/vendor/bootstrap/css/bootstrap.css"/>

    <!-- App styles -->
    <link rel="stylesheet" href="/luna/styles/pe-icons/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="/luna/styles/pe-icons/helper.css"/>
    <link rel="stylesheet" href="/luna/styles/stroke-icons/style.css"/>
    <link rel="stylesheet" href="/luna/styles/style.css">
    <link rel="stylesheet" href="/luna/styles/toastr.min.css">
</head>
<body class="blank">

<!-- Wrapper-->
<div class="wrapper">


    <!-- Main content-->
    <section class="content">

        <div class="container-center animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-unlock"></i>
                </div>
                <div class="header-title">
                    <h3>BOSS</h3>
                    <small>
                        Please enter your credentials to login.
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <form action="/postLogin" method="POST" id="loginForm" novalidate>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-form-label" for="email">Email</label>
                            <input type="text" placeholder="example@gmail.com" title="Please enter you email" required="" value="" name="email" id="username" class="form-control">

                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">

                        </div>
                        <div>
                            <button type="submit" class="btn btn-accent">Login</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="/luna/vendor/pacejs/pace.min.js"></script>
<script src="/luna/vendor/jquery/dist/jquery.min.js"></script>
<script src="/luna/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/luna/vendor/toastr/toastr.min.js"></script>


@if (session('error'))
<script>
    $(document).ready(function () {

        toastr.options = {
            "debug": false,
            "newestOnTop": true,
            "positionClass": "toast-top-right",
            "closeButton": true,
            "progressBar": true
        };

        toastr.error('Error - Username/Password wrong.');

    });
</script>
@endif

</body>

</html>