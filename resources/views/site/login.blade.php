@extends('layouts.wrap')
@section('content')

    <div class="divide80"></div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <h3>Login form</h3>

                <form role="form" method="POST" action="/login">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                       <input type="password" class="form-control" name="password" id="password" placeholder="Password" required />
                    </div>
                    <div class="pull-left">

                        <p><a class="btn border-theme btn-sm" href="{{ url('/password/reset') }}">Forget password?</a></p>

                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-theme-dark">Login</button>
                    </div>
                    <div class="clearfix"></div>
                </form>

            </div>
        </div>
    </div>

    <div class="divide80"></div>

@stop
