@extends('layouts.authentication_layout')

@section('content')
<div id="page-container">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="hero-static d-flex align-items-center">
                    <div class="w-100">
                        <!-- Sign Up Section -->
                        <div class="content content-full bg-white">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4 py-4">
                                    <!-- Header -->
                                    <div class="text-center">
                                        <p class="mb-2">
                                            <i class="fa fa-2x fa-circle-notch text-primary"></i>
                                        </p>
                                        <h1 class="h4  mb-1">
                                          {{ __('Register') }}
                                        </h1>
                                        <h2 class="h6 font-w400 text-muted mb-3">
                                            Get your access today in one easy step
                                        </h2>
                                    </div>
                                    <!-- END Header -->

                                    <!-- Sign Up Form -->
                                    <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js) -->
                                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="py-3">
                                            <div class="form-group">
                                              <input id="name" type="text" class="form-control form-control-lg form-control-alt @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name" autofocus>
                                              @error('name')
                                              <div class="alert alert-danger alert-dismissable">
                                                  <strong>*{{ $message }}</strong>
                                              </div>
                                              @enderror
                                            </div>
                                            <div class="form-group">
                                              <input id="email" type="email" class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                                              @error('email')
                                              <div class="alert alert-danger alert-dismissable">
                                                  <strong>*{{ $message }}</strong>
                                              </div>
                                              @enderror
                                            </div>
                                            <div class="form-group">
                                              <input id="password" type="password" class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror" name="password" placeholder="Password"  required autocomplete="new-password">
                                              @error('password')
                                              <div class="alert alert-danger alert-dismissable">
                                                  <strong>*{{ $message }}</strong>
                                              </div>
                                              @enderror
                                            </div>
                                            <div class="form-group">
                                              <input id="password-confirm" type="password" class="form-control form-control-lg form-control-alt " name="password_confirmation" placeholder="Confirm Password"  required autocomplete="new-password">
                                          </div>
                                          <div class="form-group">
                                           <label for="example-select">Create Account As :</label>
                                           <select class="form-control @error('role') is-invalid @enderror" id="example-select" name="role">
                                               <option value="Seller">Seller</option>
                                               <option value="CS">CS</option>
                                               <option value="Operations">Operations</option>
                                           </select>
                                       </div>
                                       @error('role')
                                       <div class="alert alert-danger alert-dismissable">
                                           <strong>*{{ $message }}</strong>
                                       </div>
                                       @enderror

                                        </div>
                                        <div class="form-group row justify-content-center mb-0">
                                            <div class="col-md-6 col-xl-5">
                                                <button type="submit" class="btn btn-block btn-success">
                                                    <i class="fa fa-fw fa-plus mr-1"></i>   {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                        <a href="{{url('/login')}}">{{ __('Login') }}</a>
                                    </form>
                                    <!-- END Sign Up Form -->
                                </div>
                            </div>
                        </div>
                        <!-- END Sign Up Section -->

                        <!-- Footer -->
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
        <!-- END Page Container -->
@endsection
