@extends('layouts.admin')

@section('header-resources')
    @include('partials.datatable_css')

    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <style>
        .select2 {
            width: 100% !important;
        }
    </style>
@endsection
@section('content')
    {!! Form::open([
        'route' => 'category.store',
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
                    <h3 class="card-title pt-2 pb-2">Update Category</h3>
                    <div class="card-tools">
                        <a href="{{ route('category.list') }}" class="btn btn-sm btn-primary">
                            <i class="bx bx-list-ul pr-2"></i> Category List
                        </a>
                    </div>
                </div>


                <div class="card-body demo-vertical-spacing">

                    {!! Form::hidden('id', $data->id) !!}

                    <!-- Category Name -->
                    <div class="input-group row {{ $errors->has('category_name') ? 'has-error' : '' }}">
                        {!! Form::label('category_name', 'Category Name:', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::text('category_name', old('icon', $data->category_name), [
                                'class' => 'form-control required',
                                'placeholder' => 'Category Name'
                            ]) !!}
                            {!! $errors->first('category_name', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>

                    <!-- Icon -->
                    <div class="input-group row {{ $errors->has('icon') ? 'has-error' : '' }}">
                        {!! Form::label('icon', 'Icon:', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::text('icon', old('icon', $data->icon), [
                                'class' => 'form-control required',
                                'placeholder' => 'Icon',
                                'id' => 'icon-picker'
                            ]) !!}
                            {!! $errors->first('icon', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>

                    <!-- Keywords (optional) -->
                    <div class="input-group row {{ $errors->has('keywords') ? 'has-error' : '' }}">
                        {!! Form::label('keywords', 'Keywords:', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::select('keywords[]', $keywordsList, old('keywords', $data->keywords ? json_decode($data->keywords, true) : []), [
                                'class' => 'form-control select2',
                                'multiple' => 'multiple',
                                'data-placeholder' => 'Select Keywords',
                            ]) !!}
                            {!! $errors->first('keywords', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>

                    <!-- Description (optional) -->
                    <div class="input-group row {{ $errors->has('description') ? 'has-error' : '' }}">
                        {!! Form::label('description', 'Description', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::textarea('description', old('description', $data->description), [
                                'class' => 'form-control',
                                'placeholder' => 'Description',
                            ]) !!}
                            {!! $errors->first('description', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>

                    <!-- Thumbnail (optional) -->
                    <div class="input-group row {{ $errors->has('thumbnail') ? 'has-error' : '' }}">
                        {!! Form::label('thumbnail', 'Thumbnail (optional):', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            <img id="newThumbnail" src="{{ old('thumbnail', $data->thumbnail) ? asset($data->thumbnail) : asset('images/no_image.png') }}" style="height:120px;"/>
                            {!! Form::file('thumbnail', ['class' => 'form-control mt-3', 'id' => 'thumbnail', 'oninput' => "document.getElementById('newThumbnail').src=window.URL.createObjectURL(this.files[0])"]) !!}
                            {!! $errors->first('thumbnail', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>

                    <hr>

                    <!-- Category Logo (optional) -->
                    <div class="input-group row {{ $errors->has('category_logo') ? 'has-error' : '' }}">
                        {!! Form::label('category_logo', 'Category Logo (optional):', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            <img id="newCategoryLogo" src="{{ old('category_logo', $data->category_logo) ? asset($data->category_logo) : asset('images/no_image.png') }}" style="height:120px;"/>
                            {!! Form::file('category_logo', ['class' => 'form-control mt-3', 'id' => 'category_logo', 'oninput' => "document.getElementById('newCategoryLogo').src=window.URL.createObjectURL(this.files[0])"]) !!}
                            {!! $errors->first('category_logo', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>


                    <!-- Update Button -->
                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            {!! Form::button('Update', [
                                'type' => 'submit',
                                'class' => 'btn btn-primary'
                            ]) !!}
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    {!! form::close() !!}

@endsection

@section('footer-script')
    <script type="text/javascript" src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>

    <script>
        $('.select2').select2({
            tags: true, // Allow custom input (keywords)
            tokenSeparators: [',', ' '], // Keywords can be separated by commas or spaces
            placeholder: 'Select Keywords',
            allowClear: true
        });
    </script>
@endsection
