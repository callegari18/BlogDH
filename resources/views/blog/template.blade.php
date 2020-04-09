<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('/css/style.css') }}">
    <title>Blog - @yield('titulo')</title>
</head>

<body>
    <header>

        @include('blog.menu')

    </header>
    <main role="main">
        <section class="container mb-5">
            <div class="col-12 mt-3">
                <h1 class="h1 text-center">Blog Digital House</h1>
            </div>
            </div>
            <hr>
            @yield('principal')
        </section>
    </main>
    <footer class=" navbar-dark bg-dark fixed-bottom text-center text-white py-3">

        @include("blog.footer")

    </footer>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
