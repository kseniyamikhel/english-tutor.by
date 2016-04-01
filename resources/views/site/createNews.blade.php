@extends('layouts.wrap')
@section('content')

    <div class="divide80"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Admin Panel</h2>
            </div>
            <div class="col-md-8">
                <h4>Create News</h4>
                <form role="form" enctype="multipart/form-data" method="POST" action="{{ route('createNews') }}">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" required />
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter slug" required />
                    </div>
                    <div class="form-group">
                        <label for="excerpt">Excerpt</label>
                        <input type="text" class="form-control" name="excerpt" id="excerpt" placeholder="Excerpt" required />
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" class="form-control" name="content" id="content" placeholder="Content" required />
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image_inside" id="image_inside" required />
                    </div>
                    <div class="form-group">
                        <label for="image">Image for list</label>
                        <input type="file" class="form-control" name="image" id="image" required />
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-theme-dark">Create</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

    <div class="divide80"></div>

@endsection