@extends('_layouts.master')

@section('content')
<!-- First Section  -->
<section class="mt-16 flex justify-center">

    <div class="container">
        <div class="text-center mb-10">
            <h6 class="font-bold text-lg">درباره ما</h6>
        </div>
    </div>

</section>
<!-- End First Section  -->


<!-- Second Section -->
<section class="flex justify-center mt-5 mb-32">

    <div class="container flex flex-col md:flex-row justify-center items-center md:items-start">
        
        <div class="md:w-1/2 p-2 md:p-0">
            <img src="/assets/img/about_us_pic.jpg" class="rounded-lg about_us__image" alt="" srcset="">
        </div>

        <div class="md:w-1/2 p-3 md:pr-4">
            <h5 class="font-black">آموزشگاه زبان بیستون اراک</h5>
            <p class="mt-4 text-justify text-gray-700 leading-7">
                لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی
                گرافیک گفته می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن
                صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر
                گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای
                صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی استفاده می‌کنند تا صرفا به مشتری یا
                صاحب کار خود نشان دهند که صفحه طراحی یا صفحه بندی شده بعد از اینکه متن در آن قرار
                گیرد چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته شده‌است. از آنجایی که
                طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال
                کار آنها به نوعی وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه گرافیکی
                خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند
            </p>
        </div>

    </div>


</section>
<!-- End Second Section -->


@include('_partials.address')


@endsection



@section('scripts')
<script type="text/javascript" src="https://cdn.map.ir/web-sdk/1.4.2/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.map.ir/web-sdk/1.4.2/js/mapp.env.js"></script>
<script type="text/javascript" src="https://cdn.map.ir/web-sdk/1.4.2/js/mapp.min.js"></script>

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
            apiKey: 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjgxNTkwMTI0YTAyNjQ5YzEwYjNkZTMzMWQwNGU0OWM1ZThjNzBlM2NhNGFkZjRlYTVlNGFhNDlmZGVjODc1Yjg0Y2VmM2Q2Y2FiMzY1ZDA3In0.eyJhdWQiOiI4MjQ0IiwianRpIjoiODE1OTAxMjRhMDI2NDljMTBiM2RlMzMxZDA0ZTQ5YzVlOGM3MGUzY2E0YWRmNGVhNWU0YWE0OWZkZWM4NzViODRjZWYzZDZjYWIzNjVkMDciLCJpYXQiOjE1ODM3ODU0ODgsIm5iZiI6MTU4Mzc4NTQ4OCwiZXhwIjoxNTg2MjAxMDg4LCJzdWIiOiIiLCJzY29wZXMiOlsiYmFzaWMiXX0.RirVN1CKzM5RViHjX6JgYtZRmu8CzpwT5dx1OVJkR0R1JKYWwdLosqUzr4a3f8G-LppodEZqXoUct1uG6oNbse6Gt9_AUijldlH0j83wHwRz-v_F7mfdXaPe1ji8laRJSOksR092IyZdJol-S9QjlwouW14tvGIys4UvXL6RuVaz2MmfeVG2k-FoSoZD_XUCQ715fWkxm22Q3dK_ey3-tCk3SLILi5W9mGq5MQphIV-r4HLnAYh-g-Tv19zN2DCG3PSUCSgPfKoChWrFz7IfFvmXn-w3xtp-hzK8l8ibIUax2CyKxUb_lOCM210EvcR2WSfdLMeoDxsMJ26a1KPpNw'
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
@endsection