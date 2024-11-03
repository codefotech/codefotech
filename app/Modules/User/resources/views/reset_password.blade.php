@extends('backend.layouts.content')

@section('header-resources')
    @include('backend.partials.datatable_css')

    <link rel="stylesheet" href="{{ asset('assets/libs/select2/css/select2.min.css') }}">
    <style>
        .select2 {
            width: 100% !important;
        }
    </style>
@endsection

@section('content')
    {!! Form::open([
       'route' => 'reset_password.update',
        'method' => 'post',
        'id' => 'form_id',
        'enctype' => 'multipart/form-data',
        'files' => 'true',
        'role' => 'form',
    ]) !!}


    <div class="row">
        <div class="col-md-12 p-5 pt-3">
            <div class="card card-outline card-primary form-card">
                <div class="card-header">
                    <h3 class="card-title pt-2 pb-2"><i class="fas fa-plus"></i> Reset Password </h3>
                </div>


                <!-- /.card-header -->
                <div class="card-body demo-vertical-spacing">

                    <div class="input-group row {{ $errors->has('old_password') ? 'has-error' : '' }}">
                        {!! Form::label('old_password', 'Old Password', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::text('old_password', old('old_password'), [
                                'class' => 'form-control required',
                                'placeholder' => 'Enter Old Password',
                            ]) !!}
                            {!! $errors->first('old_password', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>

                    <div class="input-group row {{ $errors->has('new_password') ? 'has-error' : '' }}">
                        {!! Form::label('new_password', 'New Password', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::text('new_password', old('new_password'), [
                                'class' => 'form-control required',
                                'placeholder' => 'Enter New Password',
                            ]) !!}
                            {!! $errors->first('new_password', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary">Next</button>
                        </div>
                    </div>

                </div>

                {!! form::close() !!}
            </div>
        </div>
    </div>

    @include('backend.plugins.image_upload')
@endsection

@section('footer-script')
    <script type="text/javascript" src="{{ asset('assets/libs/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/js/select2.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#form_id").validate({
                errorPlacement: function() {
                    return true;
                },
            });
        });

        $(document).ready(function () {
            $('.select2').select2({
                placeholder: 'Select One',
                allowClear: true
            });
        });
    </script>
@endsection
