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
        'route' => 'blog.store',
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
                    <h3 class="card-title pt-2 pb-2"><i class="fas fa-edit"></i> Update Blog </h3>
                    <div class="card-tools float-end">
                        <a href="{{ route('blog.list') }}" class="btn btn-primary"><i class="fas fa-list"></i>&nbsp; Blog List </a>
                    </div>
                    <!-- /.card-tools -->
                </div>


                <!-- /.card-header -->
                <div class="card-body demo-vertical-spacing">
                    <input type="hidden" name="id" value="{{ $data->id }}">



                    <div class="form-group pb-3">
                        <label for="" class="control-label">Existing Photo</label>
                        <div class="pt-3">
                            <img src="{{ asset($data->image ?? 'assets/images/no_image.png') }}" class="existing-photo" id="oldPhoto" style="height:120px;">
                            <br><br>
                            <input
                                oninput="document.getElementById('oldPhoto').src = window.URL.createObjectURL(this.files[0])"
                                type="file" class="form-control" id="photoUpdate">

                            <br>
                            <input type="text" class="form-control" id="photoFilePath"
                                   value="{{ $blogData['image'] ?? '' }}" readonly disabled>
                        </div>
                    </div>


                    <div class="input-group row {{ $errors->has('heading') ? 'has-error' : '' }}">
                        {!! Form::label('heading', 'Heading', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::text('heading', $data->heading, [
                                'class' => 'form-control required',
                                'placeholder' => 'Enter Heading',
                            ]) !!}
                            {!! $errors->first('heading', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
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
                    <div class="input-group row {{ $errors->has('title') ? 'has-error' : '' }}">
                        {!! Form::label('title', 'Title', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::text('title', $data->title, [
                                'class' => 'form-control required',
                                'placeholder' => 'Enter Title',
                            ]) !!}
                            {!! $errors->first('title', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="input-group row {{ $errors->has('comments') ? 'has-error' : '' }}">
                        {!! Form::label('comments', 'Comments', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::textarea('comments', $data->comments, [
                                'class' => 'form-control',
                                'placeholder' => 'Enter Comments',
                            ]) !!}
                            {!! $errors->first('comments', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="input-group row {{ $errors->has('content') ? 'has-error' : '' }}">
                        {!! Form::label('content', 'Content', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::textarea('content', $data->content, [
                                'class' => 'form-control',
                                'placeholder' => 'Enter Content',
                            ]) !!}
                            {!! $errors->first('content', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="input-group row {{ $errors->has('blog_quote') ? 'has-error' : '' }}">
                        {!! Form::label('blog_quote', 'Blog Quote', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::textarea('blog_quote', $data->blog_quote, [
                                'class' => 'form-control',
                                'placeholder' => 'Enter Blog Quote',
                            ]) !!}
                            {!! $errors->first('blog_quote', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="input-group row {{ $errors->has('categories') ? 'has-error' : '' }}">
                        {!! Form::label('categories', 'Categories', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::select('categories', $categories_list, $data->categories, [
                                'class' => 'form-control required categories',
                            ]) !!}
                            {!! $errors->first('categories', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="input-group row {{ $errors->has('date') ? 'has-error' : '' }}">
                        {!! Form::label('date', 'Date:', ['class' => 'col-md-3']) !!}
                        <div class="col-md-9">
                            {!! Form::date('date', $data->date ?? old('date'), ['class' => 'form-control']) !!}
                            {!! $errors->first('date', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="input-group row {{ $errors->has('posts') ? 'has-error' : '' }}">
                        {!! Form::label('posts', 'Posts', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::text('posts', $data->posts, [
                                'class' => 'form-control required',
                                'placeholder' => 'Enter Posts',
                            ]) !!}
                            {!! $errors->first('posts', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="input-group row {{ $errors->has('post_date') ? 'has-error' : '' }}">
                        {!! Form::label('post_date', 'Post Date:', ['class' => 'col-md-3']) !!}
                        <div class="col-md-9">
                            {!! Form::date('post_date', $data->post_date ?? old('date'), ['class' => 'form-control']) !!}
                            {!! $errors->first('post_date', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="input-group row {{ $errors->has('tags') ? 'has-error' : '' }}">
                        {!! Form::label('tags', 'Tags', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::text('tags', $data->tags, [
                                'class' => 'form-control',
                                'placeholder' => 'Enter Tags',
                            ]) !!}
                            {!! $errors->first('tags', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="input-group row {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('email', 'Email', ['class' => 'col-md-3 control-label required-star']) !!}
                        <div class="col-md-9">
                            {!! Form::text('email', $data->email, [
                                'class' => 'form-control required',
                                'placeholder' => 'Enter Email',
                            ]) !!}
                            {!! $errors->first('email', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>
                    <div class="input-group row {{ $errors->has('website') ? 'has-error' : '' }}">
                        {!! Form::label('website', 'Website', ['class' => 'col-md-3 control-label']) !!}
                        <div class="col-md-9">
                            {!! Form::text('website', $data->website, [
                                'class' => 'form-control',
                                'placeholder' => 'Website Link',
                            ]) !!}
                            {!! $errors->first('website', '<span class="help-block text-danger">:message</span>') !!}
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <button class="btn btn-primary">Update</button>
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
        $(function() {
            $(".select2").select2();

        });
    </script>
@endsection
