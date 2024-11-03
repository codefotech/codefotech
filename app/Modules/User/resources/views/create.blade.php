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
       'route' => 'user.store',
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
                    <h3 class="card-title pt-2 pb-2"><i class="fas fa-plus"></i> Add User </h3>
                    <div class="card-tools float-end">
                        <a href="{{ route('user.list') }}" class="btn btn-primary"><i class="fas fa-list"></i>&nbsp; Blog List </a>
                    </div>
                </div>


                <!-- /.card-header -->
                <div class="card-body demo-vertical-spacing">

                    <div class="form-group pb-3">
                        <img id="newPhoto" src="{{ asset('assets/images/no_image.png') }}"
                             style="height:120px;" />
                        <br />

                        <label class="form-label">Existing Photo</label>
                        <input
                            oninput="document.getElementById('newPhoto').src=window.URL.createObjectURL(this.files[0])"
                            type="file" class="form-control" id="photoCreate">
                    </div>

                    <div class="input-group row {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('name', 'Name', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::text('name', old('name'), [
                                'class' => 'form-control required',
                                'placeholder' => 'Enter User Name',
                            ]) !!}
                            {!! $errors->first('name', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>

                    <div class="input-group row {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email', 'Email', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::text('email', old('email'), [
                                'class' => 'form-control required',
                                'placeholder' => 'Enter Email',
                            ]) !!}
                            {!! $errors->first('email', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>

                    <div class="input-group row {{ $errors->has('password') ? 'has-error' : '' }}">
                        {!! Form::label('password', 'Password', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::text('password', old('password'), [
                                'class' => 'form-control required',
                                'placeholder' => 'Enter Password',
                            ]) !!}
                            {!! $errors->first('password', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>

                    <div class="input-group row {{ $errors->has('user_type') ? 'has-error' : '' }}">
                        {!! Form::label('user_type', 'User Type', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::select('role', $roles, old('role'), [
                                'class' => 'form-control required user_type',
                            ]) !!}
                            {!! $errors->first('role', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>


                    <div class="input-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary">Add</button>
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
