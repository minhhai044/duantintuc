<!DOCTYPE html>
<html>

<head>
    <!-- START head -->
    @include('layouts.partials.head')
    <!-- END head -->
</head>

<body>
    <!-- START topbar -->
    @include('layouts.partials.topbar')
    <!-- END topbar -->

    <div class="columns" id="app-content">
        <div class="column is-2 is-fullheight is-hidden-touch" id="sidebar">
            {{-- Start nav --}}
            @include('layouts.partials.nav')
            {{-- end nav --}}
        </div>

        <div class="column is-10" id="page-content">
            {{-- Start body --}}
            <div class="content-body">
                @yield('content')
            </div>
            {{-- end body --}}

        </div>
    </div>

    <!-- START script -->
    @include('layouts.partials.script')
    <!-- END script -->


</body>

<!-- Mirrored from bulma-admin.test/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Feb 2024 10:20:26 GMT -->

</html>
