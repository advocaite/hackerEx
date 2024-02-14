<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap-responsive.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/he.css'); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />

</head>

<body class="index">
    @include('layout.header')

    @yield('content')
    @push('js')
        <script type="text/javascript">
            var indexdata = {
                ip: '251.91.242.181',
                pass: 'u70hTB9s',
                up: '7 days and 6 hours',
                chg: 'change'
            };
        </script>
    @endpush
    <span id="modal"></span>
    @include('layout.footer')

    @stack('js')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/tooltip.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
