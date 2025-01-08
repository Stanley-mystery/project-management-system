<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card p-4 shadow-sm">
                <h2 class="text-center mb-4">Login</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <!-- Email Field -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required>
                        <!-- Error message for email -->
                        @error('email')
                            <div class="invalid-feedback d-flex align-items-center justify-content-start">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control  @error('password') is-invalid @enderror" required>
                        <!-- Error message for password -->
                        @error('password')
                            <div class="invalid-feedback d-flex align-items-center justify-content-start">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Remember Me Checkbox -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                        <label for="remember" class="form-check-label">Remember me</label>
                    </div>

                 
                    <!-- Display any general session errors -->
                    @if(session('error'))
                        <div class="alert alert-danger">
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif

                    <!-- Login Button -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                    <!-- Forgot Password Link -->
                    <div class="text-center mt-3">
                        <a href="#" class="text-decoration-none">Forgot your password?</a>
                    </div>

                    <!-- Sign Up Link -->
                    <div class="text-center mt-3">
                        <p>Don't have an account?</p>
                        <a href="#" class="btn btn-outline-primary">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional for enhanced interactivity) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
