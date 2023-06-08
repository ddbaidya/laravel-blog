<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel Open Blog - ddbaidya">
    <meta name="author" content="Debdulal Baidya">
    <meta name="keywords" content="Laravel Open Blog, Laravel Blog, Open Blog, blog">
    @yield('meta')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="{{ asset('assets/admin/img/icons/icon-48x48.png') }}" />
    <title>@yield('title')</title>
    <link href="{{ asset('/assets/admin/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    @yield('stylesheet')
</head>

<body>
    <div class="wrapper">
        <x-admin.sidebar.left-sidebar />

        <div class="main">
            <x-admin.header.top-header />

            <main class="content">
                @yield('content')
            </main>

            <x-admin.footer.bottom-footer />
        </div>
    </div>

    <script src="{{ asset('/assets/admin/js/app.js') }}"></script>
    @yield('script')
</body>

</html>