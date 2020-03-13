<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://cdn.rawgit.com/rastikerdar/shabnam-font/v5.0.1/dist/font-face.css" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>{{ $page->siteTitle }}</title>
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/style.css') }}">
</head>

<body>
    <div id="app" class="bg-gray-200 h-screen">
        

        <div class="page-wrap bg-gray-200">

            <navbar url="{{ $page->getUrl() }}"></navbar>
            @yield('content')

        </div>



        <div class="site-footer">
            @include('_partials.footer')
        </div>

        {{-- <div class="h-56 mt-64"></div> --}}
    </div>


</body>

</html>

<script src="{{ mix('/js/main.js') }}"></script>
@yield('scripts')