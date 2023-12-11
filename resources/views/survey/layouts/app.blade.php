<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href={{ asset('assets/plugins/global/plugins.bundle.css') }} rel="stylesheet" type="text/css" />
    <link href={{ asset('assets/css/style.bundle.css') }} rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href={{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }} rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->

    <link rel="stylesheet" href={{ asset('css/layouts.css') }}>

    <style>
        body {
            overflow: hidden;
        }

        .container{
            opacity: 0;
            transition: opacity 1s;
        }
    </style>


    <title>@yield('title')</title>
</head>

<body class="bg-white position-relative">
    <lottie-player mode="normal" speed="1.3" class="position-fixed" style="display: none"
        src={{ asset('assets/lottie/star.json') }}>
    </lottie-player>
    <!--begin::Main-->
    <div class="container d-flex flex-column flex-root">
        @yield('content')
    </div>
    @include('survey.layouts.back')
    @include('survey.layouts.scroll')
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src={{ asset('assets/plugins/global/plugins.bundle.js') }}></script>
    <script src={{ asset('assets/js/scripts.bundle.js') }}></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src={{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}></script>
    <!--end::Page Vendors Javascript-->

    @include('survey.layouts.script')

    @yield('script')
</body>

</html>
