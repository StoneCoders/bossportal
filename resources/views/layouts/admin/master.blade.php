<!DOCTYPE html>
<html>
<head>

    @include('layouts.admin.meta')
    @include('layouts.admin.links')

</head>
<body>

    <div class="wrapper">

        @include('layouts.admin.header')
        @include('layouts.admin.nav')

        <section class="content">
            @yield('content')
        </section>

    </div>

    @include('layouts.admin.scripts')
    @yield('custom-scripts')
    <script src="{{mix('js/app.js') }}" defer></script>
</body>
</html>