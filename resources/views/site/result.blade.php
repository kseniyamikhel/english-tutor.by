@extends('layouts.wrap')
@section('content')
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h4>Test Level</h4>
                </div>
                <div class="col-sm-6 hidden-xs text-right">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('main') }}">Home</a></li>
                        <li>Test Level</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="divide80"></div>

    <div class="container">
        <h2>Congratulations!</h2>
        <div class="row">
            <div class="col-md-8">
                <h4>Your level is {{ $level }}</h4>
                <h5>Right answers: {{ $countRightAnswers }} of {{ $lastQuestionId }}</h5>
                Here you can learn more for your level and do some exercises:<br />
                <a href="{{ $href }}" class="btn border-theme btn-lg">{{ $level }}</a>
            </div>
        </div>
    </div>

    <div class="divide60"></div>
@stop