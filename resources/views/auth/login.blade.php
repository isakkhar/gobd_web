@extends('layouts.authentication_layout')

@section('content')
        <div id="page-container">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="hero-static d-flex align-items-center">
                    <div class="w-100">
                        <!-- Sign In Section -->
                        <div class="content content-full bg-white">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                                    <!-- Header -->
                                    <div class="text-center">
                                        <p class="mb-2">
                                            <i class="fa fa-2x fa-circle-notch text-primary"></i>
                                        </p>
                                        <h1 class="h4 mb-1">
                                            {{ __('Login') }}
                                        </h1>
                                    </div>
                                    <!-- END Header -->
                                      <form  method="POST" action="{{ route('login') }}">
                                          @csrf
                                        <div class="py-3">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">
                                            </div>
                                              @error('email')
                                              <div class="alert alert-danger alert-dismissable">
                                                  <strong>{{ $message }}</strong>
                                              </div>
                                              @enderror
                                            <div class="form-group">
                                              <input type="password" id="password" class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="password">
                                            </div>
                                                @error('password')
                                                <div class="alert alert-danger alert-dismissable">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                                @enderror
                                            <div class="form-group">
                                                <div class="d-md-flex align-items-md-center justify-content-md-between">
                                                    <div class="custom-control custom-switch">

                                                        <input type="checkbox" class="custom-control-input" name="remember" id="login-remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="custom-control-label font-w400" for="login-remember">{{ __('Remember Me') }}</label>
                                                    </div>

                                                    <div class="py-2">
                                                        @if (Route::has('password.request'))
                                                        <a class="font-size-sm" href="{{ route('password.request') }}">  {{ __('Forgot Your Password?') }}</a>
                                                        @endif
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-center mb-0">
                                            <div class="col-md-6 col-xl-5">
                                                <button type="submit" class="btn btn-block btn-primary">
                                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> {{ __('Login') }}
                                                </button>
                                            </div>
                                        </div>
                                        <a href="{{url('/register')}}">{{ __('Register') }}</a>
                                    </form>
                                    <!-- END Sign In Form -->
                                </div>
                            </div>
                        </div>
                        <div class="font-size-sm text-center text-muted py-3">
                            <strong>GO BD Logistics</strong> &copy; <span data-toggle="year-copy"></span>
                        </div>
                        <!-- END Footer -->
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
@endsection
