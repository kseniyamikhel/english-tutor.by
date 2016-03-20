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
                <form role="form" class="subscribe-form" action="#" method="post">
                    <h5>1. Commodi dolore dolores eum in ipsa libero nihil, odit perferendis quaerat, quia, quibusdam quisquam quod sit tempora temporibus unde vitae.</h5>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                            Option one is this and that&mdash;be sure to include why it's great
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            Option two can be something else and selecting it will deselect option one
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                            Option three
                        </label>
                    </div>
                    <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-success btn-md" type="submit">Answer</button>
                                {{--<button class="success-alert btn btn-success btn-lg btn-sweet-alert" type="submit">success Alert</button>--}}
                            </span>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="divide60"></div>
@stop