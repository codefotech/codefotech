@extends('backend.index')

@section('header-resources')
@endsection

@section('body-content')
    @include('backend.partials.message')
    @yield('content')
@endsection

@section('footer-script')
@endsection
