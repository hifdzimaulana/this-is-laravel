<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('page-title')
    </title>
</head>

<body>
    <header>
        @include('partials.navbar')
    </header>

    <div class="container">
        <h1>@yield('title')</h1>
        @yield('content')
    </div>

    <footer>
        <h1 style="color: gray">anggap aja ini footer</h1>
    </footer>

</body>

</html>
