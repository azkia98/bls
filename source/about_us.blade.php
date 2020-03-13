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
@endsection