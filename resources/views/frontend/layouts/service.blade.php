@extends('frontend.index')

@section('title')
Services
@endsection

@section('header-resources')
@endsection

@section('content')
    @include('frontend.partials.header')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Service</li>
                </ol>
                <h2>Service</h2>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        @include('frontend.partials.service.service')
        @include('frontend.partials.work')
        @include('frontend.partials.testimonials')

    </main>
    @include('frontend.partials.footer')
@endsection

@section('footer-script')
@endsection
