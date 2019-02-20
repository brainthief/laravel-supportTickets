<html>

<head>
    <title> @yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/app.css">
</head>


<body>
    @include('shared.navbar')
    @yield('content')
    <script src="/js/app.js">

    </script>
</body>

</html>
