@extends('frontend.index')

@section('header-resources')
@endsection

@section('content')
    @include('frontend.partials.header')
    @include('frontend.partials.home')
    <main id="main">
        @include('frontend.partials.about')
        @include('frontend.partials.services')
        @include('frontend.partials.work')
        @include('frontend.partials.plan')
        @include('frontend.partials.faq')
        @include('frontend.partials.testimonials')
        @include('frontend.partials.team')
        @include('frontend.partials.clients')
        @include('frontend.partials.blogs')
        @include('frontend.partials.quote')
    </main>
    @include('frontend.partials.footer')


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection

@section('footer-script')
@endsection
