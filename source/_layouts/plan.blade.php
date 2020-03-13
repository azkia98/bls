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

@endsection