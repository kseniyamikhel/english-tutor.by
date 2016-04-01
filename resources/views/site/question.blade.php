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
        @foreach($question as $questionItem)
        <h2>Question {{ $questionItem['id'] }}</h2>

        <div class="row">
            <div class="col-md-8">
                <form role="form" action="{{ route('answer', ['id' => $questionItem['id']]) }}" method="post">
                    {!! csrf_field() !!}
                    <h4>{{ $questionItem['question'] }}</h4>
                    <div class="radio">
                        <label>
                            <input type="radio" name="answer" value="1" checked>
                            {{ $questionItem['option1'] }}
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="answer" value="2">
                            {{ $questionItem['option2'] }}
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="answer" value="3">
                            {{ $questionItem['option3'] }}
                        </label>
                    </div>
                    <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-success btn-md" type="submit">Answer</button>
                            </span>
                    </div>
                </form>

            </div>
        </div>
        @endforeach
    </div>

    <div class="divide60"></div>
@stop