<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>DC Comics | @yield('title')</title>
    
    {{-- CDN --}}
    @yield('cdns')
    
</head>
<body>

    {{-- Header --}}
    <header>
        @include('includes.header')
    </header>

    {{-- Main --}}
    <main class="container">
        <section id='@yield('section-id')'>
            <div class="card my-5 p-5">
                @yield('content')
            </div>
        </section>
    </main>

    {{-- Footer --}}
    <footer>
        @include('includes.footer')
    </footer>

    {{-- Scripts --}}
    @yield('scripts')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>