<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ ('assets/images/favicon.ico') }}">

    @vite(['resources/js/app.js'])

    @stack('styles')
</head>
<body data-sidebar="dark">
    <div id="layout-wrapper">
        @include('layouts.topbar')
        @include('layouts.sidebar')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">@yield('title')</h4>

                                <div class="page-title-right">
                                    @yield('breadcrumbs')

                                </div>

                            </div>
                        </div>
                    </div>

                    @yield('content')
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>



    @stack('scripts')
</body>

</html>
