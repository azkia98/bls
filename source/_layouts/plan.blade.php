@extends('_layouts.master')

@section('content')
<!-- Fist Section  -->
<section class="mt-16 flex justify-center">

    <div class="container">
        <div class="text-center mb-10">
            <h5 class="font-bold">{{ $page->title }}</h5>
        </div>

    </div>

</section>
<!-- End Fist Section  -->


<!-- Seconde Section -->
<section class="mt-5 flex justify-center mb-24 lg:mb-32">
    <div class="container flex justify-center">

        <div class="overflow-x-auto" style="direction: ltr;">

            @yield('plan')

        </div>

    </div>

</section>
<!-- End Seconde Section -->


<section class="flex justify-center">
    <div class="container">

        <p class="bg-gray-300 p-8 text-justify ">
            {{ $page->description }}

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, iusto? Dolorum, nobis, quas dolore delectus quaerat illo, soluta non sunt illum officiis alias fugit. Corrupti libero consequatur pariatur sint veniam.lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum dolor hic ullam qui omnis aliquid eos. Tempora molestiae expedita aperiam sed fugiat qui facere, neque maiores vel repudiandae illum veritatis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ducimus aspernatur deleniti ea dolorem fugiat vel dolore molestias laboriosam, dolores expedita veritatis voluptates, hic totam cum modi excepturi eaque asperiores repellendus laudantium qui beatae doloribus distinctio! Non quam exercitationem nesciunt totam nam optio similique dolor, ipsum reiciendis eos in doloribus quod suscipit voluptas tenetur ducimus. Laudantium tempore reprehenderit quia vitae doloribus ex, culpa recusandae at. Deleniti corporis dignissimos quibusdam. Nulla eum officia quis molestiae dolore, est soluta magnam provident magni tenetur beatae rem amet consequuntur sit ipsam dolor, reprehenderit ducimus placeat esse ut sequi impedit laboriosam nam. Esse, non culpa!
        </p>


        <div class="mb-10 mt-10">
                <a 
                    href="{{ $page->bbb_link }}" 
                    class="bg-transparent 
                    hover:bg-blue-500 
                    text-blue-700 
                    font-semibold 
                    hover:text-white 
                    py-2 
                    px-4 
                    border 
                    border-blue-500 
                    hover:border-transparent 
                    rounded
                    ">
                    لینک کلاس
                </a>
        </div>

        



    </div>
</section>

@endsection