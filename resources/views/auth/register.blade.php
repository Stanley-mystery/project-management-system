@extends('layouts.auth')

@section('content')

<div class="auth-main v1">
  <div class="auth-wrapper">
    <div class="auth-form">
      <div class="card my-5">
        <div class="card-body">
          <div class="text-center">
            <img src="{{ asset('images/img-auth-register.png') }}" alt="images" class="img-fluid mb-3" />
            <h4 class="f-w-500 mb-1">Register with your email</h4>
            <p class="mb-3">Already have an Account? <a href="{{ route('login') }}" class="link-primary">Log in</a></p>
          </div>

          <!-- Registration Form -->
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Full Name -->
            <div class="mb-3">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" required value="{{ old('name') }}" />
              @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Email Address -->
            <div class="mb-3">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" required value="{{ old('email') }}" />
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Phone Number -->
            <div class="mb-3">
              <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" required value="{{ old('phone_number') }}" />
              @error('phone_number')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Role Dropdown -->
            <div class="mb-3">
              <select name="role_id" class="form-control @error('role_id') is-invalid @enderror" required>
                <option value="">Select Role</option>
                @foreach($roles as $role)
                  <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                @endforeach
              </select>
              @error('role_id')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required />
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
              <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" required />
              @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-primary">Create Account</button>
            </div>
          </form>

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
        </div>
      </div>
    </div>

  
  </div>
</div>

@endsection
