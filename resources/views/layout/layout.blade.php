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
                ip: '{{ $gdata['ip'] }}',
                pass: '{{ $gdata['pass'] }}',
                up: '{{ $gdata['up'] }}',
                chg: '{{ $gdata['chg'] }}'
            };
        </script>
    @endpush
    <span id="modal"></span>
    @include('layout.footer')

    @stack('js')


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/tooltip.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
