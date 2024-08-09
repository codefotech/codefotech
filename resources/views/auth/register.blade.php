@extends('auth.layout.main')

@section('header-resources')
@endsection

@section('auth-content')
    <!-- Content -->
    <div class="position-relative">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Register Card -->
                <div class="card p-2">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mt-5">
                        <a href="{{ asset('/') }}" class="logo d-flex align-items-center">
                            <!-- <img src="assets-2/img/logo.png" alt="">
                            <span>FlexStart</span> -->

                            <img src="{{ asset('assets-2/img/CodeFoTech-1.png') }}" style="max-height: 40px"
                                 alt="Codefotech">
                        </a>
                    </div>
                    <!-- /Logo -->
                    <div class="card-body mt-2">
                        <h4 class="mb-2 fw-semibold">Adventure starts here 🚀</h4>
                        <p class="mb-4">Make your app management easy and fun!</p>

                        {!! Form::open([
                            'route' => 'register.store',
                            'method' => 'POST',
                            'class' => 'mb-3',
                            'id' => 'form_id',
                            'enctype' => 'multipart/form-data',
                            'role' => 'form'
                        ]) !!}

                        <div class="form-floating form-floating-outline mb-3 {{ $errors->has('user_name') ? 'has-error' : '' }}">
                            {!! Form::text('user_name', old('user_name'), [
                                'class' => 'form-control',
                                'id' => 'user_name',
                                'placeholder' => 'Enter your username',
                            ]) !!}
                            {!! Form::label('user_name', 'Username') !!}
                            {!! $errors->first('user_name', '<span class="help-block text-danger">:message</span>') !!}
                        </div>

                        <div class="form-floating form-floating-outline mb-3 {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::email('email', old('email'), [
                                'class' => 'form-control',
                                'id' => 'email',
                                'placeholder' => 'Enter your email'
                            ]) !!}
                            {!! Form::label('email', 'Email') !!}
                            {!! $errors->first('email', '<span class="help-block text-danger">:message</span>') !!}
                        </div>

                        <div class="mb-3">
                            <div class="form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <div class="form-floating form-floating-outline {{ $errors->has('password') ? 'has-error' : '' }}">
                                        {!! Form::password('password', [
                                            'class' => 'form-control',
                                            'id' => 'password',
                                            'placeholder' => '&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;',
                                            'aria-describedby' => 'password'
                                        ]) !!}
                                        {!! Form::label('password', 'Password') !!}
                                        {!! $errors->first('password', '<span class="help-block text-danger">:message</span>') !!}
                                    </div>
                                    <span class="input-group-text cursor-pointer">
                                        <i class="mdi mdi-eye-off-outline"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            {!! Form::button('Register', ['type' => 'submit', 'class' => 'btn btn-primary d-grid w-100']) !!}
                        </div>

                        {!! Form::close() !!}


                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="{{ route('login') }}">
                                <span>Login</span>
                            </a>
                        </p>

                        <div class="divider my-4">
                            <div class="divider-text">or</div>
                        </div>

                        <div class="d-flex justify-content-center gap-2">
                            <a href="javascript:" class="btn btn-icon btn-lg rounded-pill btn-text-facebook">
                                <i class="tf-icons mdi mdi-24px mdi-facebook"></i>
                            </a>

                            <a href="javascript:" class="btn btn-icon btn-lg rounded-pill btn-text-twitter">
                                <i class="tf-icons mdi mdi-24px mdi-twitter"></i>
                            </a>

                            <a href="javascript:" class="btn btn-icon btn-lg rounded-pill btn-text-github">
                                <i class="tf-icons mdi mdi-24px mdi-github"></i>
                            </a>

                            <a href="javascript:" class="btn btn-icon btn-lg rounded-pill btn-text-google-plus">
                                <i class="tf-icons mdi mdi-24px mdi-google"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Register Card -->
                <img alt="mask" src="{{ asset('assets/img/illustrations/auth-basic-register-mask-light.png') }}"
                     class="authentication-image d-none d-lg-block"
                     data-app-light-img="illustrations/auth-basic-register-mask-light.png"
                     data-app-dark-img="illustrations/auth-basic-register-mask-dark.png"/>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

@section('footer-script')
@endsection
