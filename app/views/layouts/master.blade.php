<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <title>Ashley Falsario</title>

    <link rel="shortcut icon" href="/img/gt_favicon.png">

    <!-- Bootstrap itself -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/journal-bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="/css/magister.css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
    @yield('topscript')
</head>

<body class="theme-invert">

    @yield('content')

    @yield('bottomcontent')
    <!-- Load js libs only when the page is loaded. -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="/js/modernizr.custom.72241.js"></script>
    <!-- Custom template scripts -->
    <script src="/js/magister.js"></script>

</body>
</html>
