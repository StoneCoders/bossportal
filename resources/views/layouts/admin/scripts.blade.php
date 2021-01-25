<!-- Vendor scripts -->
<script src="/luna/vendor/pacejs/pace.min.js"></script>
<script src="/luna/vendor/jquery/dist/jquery.min.js"></script>
<script src="/luna/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- App scripts -->
<script src="/luna/vendor/toastr/toastr.min.js"></script>
<link rel="stylesheet" href="/luna/styles/toastr.min.css">
<script src="/luna/scripts/luna.js"></script>


@if (session('success'))
<script>
    $(document).ready(function () {

        toastr.options = {
            "debug": false,
            "newestOnTop": true,
            "positionClass": "toast-top-right",
            "closeButton": true,
            "progressBar": true
        };

        toastr.success('Success');

    });
</script>
@endif

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

        toastr.error('Bad Data');

    });
</script>
@endif