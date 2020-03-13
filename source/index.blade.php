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


@endsection