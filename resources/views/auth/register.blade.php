@extends('layouts.auth')

@section('title', 'Register')

@section('content')<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <p class="text-left mb-4">
                            <a href="javascript:history.back()">
                                <span class="fa fa-arrow-left"></span> Go Back
                            </a>
                        </p>

                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <input id="name" type="text" name="name"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}
                                       form-control-user"
                                   placeholder="Your Name"
                                   value="{{ old('name') }}" required>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input id="email" type="email" name="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}
                                       form-control-user"
                                   placeholder="Email Address"
                                   value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="password" type="password" name="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}
                                           form-control-user"
                                       placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-sm-6">

                                <input id="password_confirmation" type="password" name="password_confirmation"
                                       class="form-control form-control-user"
                                       placeholder="Confirm Password" required>
                            </div>
                        </div>

                        <input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">

                        <hr>

                        <a href="#" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Register with Google
                        </a>

                        <a href="#" class="btn btn-facebook btn-user btn-block">
                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                        </a>
                    </form>

                    <hr>

                    <div class="text-center">
                        <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                    </div>

                    <div class="text-center">
                        <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
