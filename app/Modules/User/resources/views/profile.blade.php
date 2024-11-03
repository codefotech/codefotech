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
        'route' => 'profile.update',
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
                    <h3 class="card-title pt-2 pb-2"><i class="fas fa-edit"></i> Update Profile </h3>
                    <!-- /.card-tools -->
                </div>

                <!-- /.card-header -->
                <div class="card-body demo-vertical-spacing">
                    <input type="hidden" name="id" value="{{ $data->id }}">

                    <div class="form-group pb-3">
                        {!! Form::label('image', 'Existing Image', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-7">
                            <div class="form-group row has-feedback">
                                <div id="browseimagepp">
                                    <div class="row">
                                        <div class="col-md-12 addImages">
                                            <label class="center-block image-upload" for="user_pic">
                                                <figure>
                                                    <img
                                                        src="{{ !empty($data->image) ? url($data->image) : url('assets/images/no_image.png') }}"
                                                        class="img-responsive img-thumbnail" id="user_pic_preview"
                                                        width="150px" height="150px">
                                                </figure>
                                                <input type="hidden" id="user_pic_base64" name="user_pic_base64" value="">
                                                @if(!empty($data->image))
                                                    <input type="hidden" name="user_pic" value="{{$data->image}}"/>
                                                @endif
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group pb-3">
                        <h4 id="profile_image">
                            <label for="user_pic" class="required-star ">Profile image</label>
                        </h4>
                        <p class="text-success fw-bold small">[File Format: *.jpg/ .jpeg/ .png | Width
                            300PX, Height 300PX]</p>
                        <span id="user_err" class="text-danger" style="font-size: 10px;"></span>
                        <input type="file" class="form-control" name="user_pic" id="user_pic"
                               onchange="imageUploadWithCroppingAndDetect(this, 'user_pic_preview', 'user_pic_base64')"
                               size="300x300">
                    </div>

                    <div class="input-group row {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('name', 'Name', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::text('name', $data->name, [
                                'class' => 'form-control required',
                                'placeholder' => 'Enter Name',
                            ]) !!}
                            {!! $errors->first('name', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>

                    <div class="input-group row {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email', 'Email', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::text('email', $data->email, [
                                'class' => 'form-control required',
                                'readonly' => true,
                                'placeholder' => 'Enter Email',
                            ]) !!}
                            {!! $errors->first('email', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>

                    <div class="input-group row {{ $errors->has('user_type') ? 'has-error' : '' }}">
                        {!! Form::label('role', 'User Type:', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::select('role', $roles, $data->role_id, [
                                'class' => 'form-control required user_type',
                                'placeholder' => 'Enter User Name',
                            ]) !!}
                            {!! $errors->first('role', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary">Update</button>
                            <a href="{{ url('reset_password') }}" class="btn btn-primary">Reset Password</a>
                        </div>
                    </div>


                </div>

                {!! form::close() !!}

            </div>
        </div>
    </div>

@endsection

@section('footer-script')
    <script type="text/javascript" src="{{ asset('assets/libs/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/js/select2.min.js') }}"></script>

    <script>
        $("#form_id").validate({
            errorPlacement: function () {
                return true;
            },
        });

        $(function() {
            $(".select2").select2();

        });
    </script>
@endsection
