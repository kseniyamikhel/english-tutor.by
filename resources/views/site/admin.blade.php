@extends('layouts.wrap')
@section('content')

    <div class="divide80"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Admin Panel</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('showFormNews') }}" class="btn border-theme btn-lg">Create news</a>
            </div>
        </div>
        {{--<div class="row">
            <div class="col-md-12">
                <a href="#" class="btn border-theme btn-lg">Add Photo</a>
            </div>
        </div>--}}
    </div>

    <div class="divide80"></div>

@endsection