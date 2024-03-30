<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">
        <a class="p-2 text-white" href="/">@Predpolozhim_ded</a>
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="https://www.anilibria.tv/release/cowboy-bebop.html" target="_blank">Cowboy Bebop</a>
        <a class="p-2 text-white" href="/joke">Приколюха</a>

    </nav>
    <a class="btn btn-success" href="/tap">Тыкалка</a>
</div>
<div class="container">
    @yield('content')
</div>

</body>
</html>
