@extends('layouts.app')

@section('content')
    <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">



                    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <span class="login100-form-title p-b-59">
						Sign Up
					</span>



                        <div class="wrap-input100 validate-input{{ $errors->has('username') ? ' has-error' : '' }}">
                            <span class="label-input100">Userame</span>

                                <input id="name" type="text" class="input100" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            <span class="focus-input100"></span>
                        </div>


                        <div class="wrap-input100 validate-input{{ $errors->has('email') ? ' has-error' : '' }}">
                            <span class="label-input100">Email</span>
                            <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input{{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="label-input100">Password</span>
                            <input id="password" type="password" class="input100" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                            <span class="focus-input100"></span>
                        </div>


                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">Confirm Password</span>


                                <input id="password-confirm" type="password" class="input100" name="password_confirmation" required>
                                <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" class="login100-form-btn">

                                    Register
                                </button>
                            </div>
                            <div>  Have an account?
                                @if (Auth::guest())
                                    <li>  <a href="{{ route('login') }}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                                            Sign In
                                            <i class="fa fa-long-arrow-right m-l-5"></i>
                                        </a>
                                    </li>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
