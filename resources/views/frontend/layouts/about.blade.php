@extends('frontend.index')

@section('title')
About Us
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
                    <li>About</li>
                </ol>
                <h2>About</h2>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        @include('frontend.partials.about.about')
        @include('frontend.partials.about.team')

    </main>
    @include('frontend.partials.footer')
@endsection

@section('footer-script')
@endsection
