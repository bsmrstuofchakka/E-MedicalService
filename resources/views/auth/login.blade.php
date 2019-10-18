@extends('layouts.app')

@section('content')




    <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
        <form class="login100-form validate-form"  method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
					<span class="login100-form-title p-b-59">
						Log In
					</span>



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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>



                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" class="login100-form-btn">

                                    Login
                                </button>
                            </div>
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>

                        </div>






                             <div class="container-login100-form-btn"> Don't have a account?
                                 <div class="wrap-login100-form-btn">
                                 @if (Auth::guest())
                                   <li>  <a href="{{ route('register') }}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                                         Sign Up
                                         <i class="fa fa-long-arrow-right m-l-5"></i>
                                     </a>
                                   </li>
                                 @endif
                                 </div>
                        </div>
                    </form>

            </div>

@endsection
