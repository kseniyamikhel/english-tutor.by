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
        <h2>Let's get started!</h2>
        <div class="row">
            <div class="col-md-8">
                <p>Commodi dolore dolores eum in ipsa libero nihil, odit perferendis quaerat, quia, quibusdam quisquam quod sit tempora temporibus unde vitae.</p>
                <p>Commodi dolore dolores eum in ipsa libero nihil, odit perferendis quaerat, quia, quibusdam quisquam quod sit tempora temporibus unde vitae.</p>

                <a href="{{ route('question', ['id' => 1]) }}" class="btn border-theme btn-lg">Start Test</a>
            </div>
        </div>
    </div>

    <div class="divide60"></div>
@stop