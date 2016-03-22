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
                <h3>Register form</h3>
                <form action="/register" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name" required />
                    </div>
                    <div class="form-group">
                        <label for="emailRegister">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" required />
                    </div>
                    <div class="form-group">
                        <label for="passwordRegister">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required />
                    </div>
                    <div class="form-group">
                        <label for="rePasswordRegister">Repeat Password</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password" required />
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-theme-dark btn-lg">Register</button>
                    </div>
                    <div class="clearfix"></div>
                </form>

            </div>
        </div>
    </div>

    <div class="divide80"></div>

@stop
