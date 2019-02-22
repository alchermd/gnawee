@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-reset-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <p class="text-left mb-4">
                                        <a href="javascript:history.back()">
                                            <span class="fa fa-arrow-left"></span> Go Back
                                        </a>
                                    </p>

                                    <h1 class="h4 text-gray-900 mb-4">Reset your Password</h1>
                                </div>

                                <form class="user" method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group">
                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}
                                                       form-control-user"
                                               placeholder="Enter email address"
                                               name="email"
                                               value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input id="password" type="password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}
                                                       form-control-user"
                                               placeholder="Password"
                                               name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <input id="password-confirm" type="password"
                                               class="form-control form-control-user"
                                               name="password_confirmation"
                                               placeholder="Confirm Password" required>
                                    </div>

                                    <input type="submit" value="Reset Password"
                                           class="btn btn-primary btn-user btn-block">
                                </form>

                                <hr>

                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Try to login?</a>
                                </div>

                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

