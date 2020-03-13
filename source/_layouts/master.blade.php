<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    {{-- <link rel="stylesheet" href="/css/tailwind.css"> --}}
    {{-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> --}}
    <!-- <link rel="stylesheet" href="/css/bootstrap-rtl.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.map.ir/web-sdk/1.4.2/css/mapp.min.css">
    <link rel="stylesheet" href="https://cdn.map.ir/web-sdk/1.4.2/css/fa/style.css"> -->
    {{-- <link rel="stylesheet" href="/css/mapp.min.css"> --}}
    <link href="https://cdn.rawgit.com/rastikerdar/shabnam-font/v5.0.1/dist/font-face.css" rel="stylesheet"
        type="text/css" />
    {{-- <link rel="stylesheet" href="/css/fa/style.css"> --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>{{ $page->siteTitle }}</title>
    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
    <link rel="stylesheet" href="{{ mix('/css/style.css') }}">
</head>

<body>
    <div id="app" class="bg-gray-200">
        <navbar></navbar>
        

        @yield('section')

        <!-- FIVETH SECTION -->
        <section class="md:mt-56 mt-32 flex justify-center">

            <div class="container">

                <div class="text-center">
                    <h5 class="font-bold text-xl">

                        <span>
                            آدرس آموزشگاه
                        </span>
                    </h5>
                    <p class="text-gray-600">اراک، خیابان محسنی، روبروی بانک مسکن</p>
                </div>


                <div class="flex justify-center mt-10 md:mt-16">
                    <div class="container flex lg:relative justify-center px-2">

                        <div id="map" class="map lg:absolute rounded-md"></div>

                    </div>
                </div>


            </div>


        </section>
        <!-- END FIVETH SECTION -->


        <footer class="bg-gray-800 flex justify-center">

            <div class="container py-10 md:py-16">

                <div class="flex flex-col md:flex-row text-white justify-center items-center md:justify-between">
                    <!-- Right -->
                    <div class="md:w-1/4 flex flex-col mb-5 md:mb-0">
                        <a href="#" class="mb-2">صفحه اصلی</a>
                        <a href="#" class="mb-2">برنامه کلاسی</a>
                        <a href="#">درباره ما</a>
                    </div>

                    <!-- Middle -->
                    <div class="flex md:w-2/4 flex-col justify-between">

                        <div class="flex justify-center flex-col lg:flex-row">
                            <div
                                class="lg:border-l-2 pl-4 border-gray-500 flex align-baseline items-center mb-3 lg:mb-0 justify-center lg:justify-start">
                                <a href="#" class="ml-4">
                                    <img src="/assets/img/Instagram.svg" alt="Instagram">
                                </a>
                                <a href="#">
                                    <img src="/assets/img/telegram.png" alt="Instagram">
                                </a>
                            </div>
                            <div class="flex mr-4 items-center align-baseline mb-3 lg:mb-0">
                                <p class="whitespace-no-wrap lg:whitespace-normal">3 221 2 4 6 8 - 3 221 72 34 - 0918 86
                                    19 574</p>
                                <i class="material-icons mr-3 hidden lg:inline-block">phone</i>
                            </div>
                        </div>

                        <div class="text-center mb-3 lg:mb-0">
                            <p>طراحی شده با <span class="text-red-600">❤</span> توسط آقا یوسف</p>
                        </div>

                    </div>

                    <!-- Left -->

                    <div class="md:w-1/4">
                        <div class="relative overflow-hidden z-10">
                            <div class="bg-blue-400 w-5 h-5 circle-background absolute z--10 rounded-full"></div>
                            <a href="#" class="font-bold inline float-left">Bistoon</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




        <div class="h-56 mt-64"></div>
    </div>


</body>

</html>







<script src="{{ mix('/js/main.js') }}"></script>
<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/js/mapp.env.js"></script>
<script type="text/javascript" src="/js/mapp.min.js"></script>
<!-- <script type="text/javascript" src="https://cdn.map.ir/web-sdk/1.4.2/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.map.ir/web-sdk/1.4.2/js/mapp.env.js"></script>
<script type="text/javascript" src="https://cdn.map.ir/web-sdk/1.4.2/js/mapp.min.js"></script> -->
<script>
    $(document).ready(function () {
        var lat = 34.090134;
        var lng = 49.692657;
        var app = new Mapp({
            element: '#map',
            presets: {
                latlng: {
                    lat: lat,
                    lng: lng,
                },
                zoom: 30,
            },
            // apiKey: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjgxNTkwMTI0YTAyNjQ5YzEwYjNkZTMzMWQwNGU0OWM1ZThjNzBlM2NhNGFkZjRlYTVlNGFhNDlmZGVjODc1Yjg0Y2VmM2Q2Y2FiMzY1ZDA3In0.eyJhdWQiOiI4MjQ0IiwianRpIjoiODE1OTAxMjRhMDI2NDljMTBiM2RlMzMxZDA0ZTQ5YzVlOGM3MGUzY2E0YWRmNGVhNWU0YWE0OWZkZWM4NzViODRjZWYzZDZjYWIzNjVkMDciLCJpYXQiOjE1ODM3ODU0ODgsIm5iZiI6MTU4Mzc4NTQ4OCwiZXhwIjoxNTg2MjAxMDg4LCJzdWIiOiIiLCJzY29wZXMiOlsiYmFzaWMiXX0.RirVN1CKzM5RViHjX6JgYtZRmu8CzpwT5dx1OVJkR0R1JKYWwdLosqUzr4a3f8G-LppodEZqXoUct1uG6oNbse6Gt9_AUijldlH0j83wHwRz-v_F7mfdXaPe1ji8laRJSOksR092IyZdJol-S9QjlwouW14tvGIys4UvXL6RuVaz2MmfeVG2k-FoSoZD_XUCQ715fWkxm22Q3dK_ey3-tCk3SLILi5W9mGq5MQphIV-r4HLnAYh-g-Tv19zN2DCG3PSUCSgPfKoChWrFz7IfFvmXn-w3xtp-hzK8l8ibIUax2CyKxUb_lOCM210EvcR2WSfdLMeoDxsMJ26a1KPpNw'
        });
        app.addLayers();

        app.addMarker({
            name: 'آموزشگاه بیستون',
            latlng: {
                lat: lat,
                lng: lng,
            },
            popup: {
                open: false,
            },
        });


    });
</script>