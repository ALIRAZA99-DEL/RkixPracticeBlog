
@extends('frontend.Auth')
@section('content')


<div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action = "{{route('register') }}" method="post">
                                @csrf
                                <fieldset>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="name" name="name" type="name" value="{{old('name')}}" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" value="{{old('email')}}" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="{{old('password')}}">
                                             
                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" placeholder="confirmPassword" name="password_confirmation" type="password" value="value="{{old('password_confirmation')}}">
                                    </div>

                                    <!-- <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div> -->
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type="submit" class="btn btn-lg btn-success btn-block">SingUp</button>
                                </fieldset>

                                <div style="margin-top:4%;">
                                <a href ="{{route('login')}}">Already have a account? Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection()
