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
                hello
                <div role="tabpanel" class="login-regiter-tabs">

                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
                        <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="login">
                            <form>
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" required />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                   <input type="password" class="form-control" id="password" placeholder="Password" required />
                                </div>
                                <div class="pull-left">

                                    <p><a href="#">Forget password?</a></p>

                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-theme-dark">Login</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>


                        <div role="tabpanel" class="tab-pane" id="register">
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
                                    <label for="rePasswordRegister">Re-Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Password" required />
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-theme-dark btn-lg">Register</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="divide80"></div>

@stop
