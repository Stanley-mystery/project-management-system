@extends('layouts.auth')

@section('content')

    <div class="auth-main v1">
        <div class="auth-wrapper">
            <div class="auth-form">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('images/img-auth-login.png') }}" alt="images" class="img-fluid mb-3" />
                            <h4 class="f-w-500 mb-1">Login with your email</h4>
                            <p class="mb-3">Don't have an Account? <a href="{{ route('register') }}" class="link-primary ms-1">Create Account</a></p>
                        </div>
                        <!-- Laravel Form Start -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="Email Address" value="{{ old('email') }}" />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingInput1" placeholder="Password" />
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex mt-1 justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input input-primary" type="checkbox" name="remember" id="customCheckc1" {{ old('remember') ? 'checked' : '' }} />
                                    <label class="form-check-label text-muted" for="customCheckc1">Remember me?</label>
                                </div>
                                <a href="{{ route('password.request') }}"><h6 class="f-w-400 mb-0">Forgot Password?</h6></a>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="saprator my-3">
                                <span>Or continue with</span>
                            </div>
                            <div class="text-center">
                                <ul class="list-inline mx-auto mt-3 mb-0">
                                    <li class="list-inline-item">
                                        <a href="https://myaccount.google.com/" class="avtar avtar-s rounded-circle bg-googleplus" target="_blank">
                                            <i class="fab fa-google text-white"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                        <!-- Laravel Form End -->
                    </div>
                </div>
            </div>
            {{--  <div class="auth-sidefooter">
                <img src="{{ asset('assets/images/logo-dark.svg') }}" class="img-brand img-fluid" alt="images" />
                <hr class="mb-3 mt-4" />
                <div class="row">
                    <div class="col my-1">
                        <p class="m-0">Made with ♥ by Team <a href="https://themeforest.net/user/phoenixcoded" target="_blank"> Phoenixcoded</a></p>
                    </div>
                    <div class="col-auto my-1">
                        <ul class="list-inline footer-link mb-0">
                            <li class="list-inline-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="list-inline-item"><a href="https://pcoded.gitbook.io/light-able/" target="_blank">Documentation</a></li>
                            <li class="list-inline-item"><a href="https://phoenixcoded.support-hub.io/" target="_blank">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>  --}}
        </div>
    </div>
    
@endsection
