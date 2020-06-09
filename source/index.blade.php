@extends('_layouts.master')

@section('content')

<!-- SECONDE SECTION -->
<section class="mt-10">
    <div class="flex mb-4 flex-col md:flex-row">
        <!-- Right -->
        <div class="md:w-1/2 md:pr-20 md:pl-10 px-5 justify-center flex flex-col">
            <h1 class="font-bold text-2xl">
                <span>آموزشگاه زبان</span>
                <span class="text-blue-400">بیستون</span>
            </h1>

            <p class="mt-5 text-gray-700 text-justify">لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت
                چاپ، صفحه‌آرایی و طراحی گرافیک گفته
                می‌شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل
                ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه
                فونت و ظاهر متن باشد. معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی و بی‌معنی
                استفاده می‌کنند تا صرفا به مشتری یا صاحب کار خود نشان دهند که صفحه طراحی یا صفحه بندی شده بعد از
                اینکه متن در آن قرار گیرد چگونه به نظر می‌رسد و قلم‌ها و اندازه‌بندی‌ها چگونه در نظر گرفته
                شده‌است
            </p>

            <div class="mt-8">
                <a href="#" class="inline bg-blue-400 py-2 px-5 text-white rounded-md">بیشتر بخوانید</a>
            </div>
        </div>

        <!-- Left -->
        <div class="md:w-1/2 mt-4 md:mt-0 pl-20 flex justify-center">
            <img src="/assets/img/communication.svg" alt="communication">
        </div>
    </div>

</section>
<!-- END SECONDE SECTION -->


<!-- THIRD SECTION -->
<section class="mt-32">
    <h4 class="mb-10 text-center font-bold text-xl">استفاده از بهترین اساتید، برای یادگیری</h4>

    <!-- Four columns -->
    <div class="flex flex-wrap lg:flex-row mb-4 justify-center">

        <div class="third_section__rectangle p-2 mx-1 xl:mx-8">
            <div class="flex items-center mt-5 mb-5">
                <i class="material-icons bg-blue-400 text-white rounded-full p-2">
                    forum
                </i>
                <span class="mr-3">مکالمه</span>
            </div>
            <p class="pb-8">
                مکالمه یکی از اصلی‌ترین اسکیل‌های
                لازم برای هر زبان آموزی است و
                اینجا ما از طریق روش‌‌های نوین، این
                مهارت را به زبان آموزهای
                آموزشگاهمان یاد می‌دهیم
            </p>
        </div>

        <div class="third_section__rectangle p-2 mx-1 xl:mx-8">
            <div class="flex items-center mt-5 mb-5">
                <i class="material-icons bg-blue-400 text-white rounded-full p-2">
                    edit
                </i>
                <span class="mr-3">نوشتن</span>
            </div>
            <p class="pb-8">
                یادگیری نحوه صحیح نوشتن کلمات و جملات با گرامر صحیح، در نوشتن نامه، متن، مقالات و
                خیلی چیزهای دیگر کمکان می‌کند
            </p>
        </div>

        <div class="third_section__rectangle p-2 mx-1 xl:mx-8">
            <div class="flex items-center mt-5 mb-5">
                <i class="material-icons bg-blue-400 text-white rounded-full p-2">
                    hearing
                </i>
                <span class="mr-3">گوش دادن</span>
            </div>
            <p class="pb-8">
                می‌توان گفت گوش دادن به فهمیدن هرچه گفته می‌شود اصلی‎ترین و اولین مهارت برای هر زبان
                آموزی است و ما رو این اسکیل تمرکز بالایی دارید
            </p>
        </div>

        <div class="third_section__rectangle p-2 mx-1 xl:mx-8">
            <div class="flex items-center mt-5 mb-5">
                <i class="material-icons bg-blue-400 text-white rounded-full p-2">
                    book
                </i>
                <span class="mr-3">خواندن</span>
            </div>
            <p class="pb-8">
                ما با استفاده از یاد دادن گرامرها به بهترین روش‌های روز دنیا به زبان آموزهایمان یاد می‌دهیم تا
                بتوانند هر متنی را که می‌خواند بخوانند
            </p>
        </div>
    </div>

</section>
<!-- END THIRD SECTION -->


<!-- FOURTH SECTION -->
<section class="lg:mt-56 bg-gray-300 flex justify-center">

    <div class="container">

        <!-- Two columns -->
        <div class="flex flex-col lg:flex-row py-24 pb-10 lg:pb-24 relative">
            <!-- Right -->
            <div class="z-10">
                <h5 class="text-xl font-bold">یادگیری همراه با بهترین کتاب‌ها و برنامه‌های مجذا برای هر سطح</h5>
                <p class="mt-3 text-lg text-gray-700 w-1/2 mb-10">
                    در آموزشگاه بیستون ما علاوه بر تدریس بهترین و بروزترین کتاب های
                    آموزش زبان دنیا، برای هر سطح نیز برنامه‌هایی دقیق را آماده کرده‌ایم
                </p>
                <a href="#" class="bg-blue-500 text-white px-3 py-2 rounded-md">برنامه‌های کلاسی هر ترم</a>
            </div>

            <img class="lg:absolute hidden lg:block fourth_section__image" src="/assets/img/conversation.svg"
                alt="conversation">
        </div>
    </div>

</section>
<!-- END FOURTH SECTION -->


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