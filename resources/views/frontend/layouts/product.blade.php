@extends('frontend.index')

@section('title')
Product
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
                    <li>Product</li>
                </ol>
                <h2>Product</h2>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        @include('frontend.partials.product.product')

    </main>
    @include('frontend.partials.footer')
@endsection

@section('footer-script')

@endsection
