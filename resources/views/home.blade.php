<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics | @yield('title')</title>
</head>
<body>
    <header>
        @section('header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @section('footer')
    </footer>

</body>
</html>