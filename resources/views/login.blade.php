<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
        height: 100vh;
        display: flex;
        align-items: center;
    }

    .card {
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .banner-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .form-control {
        border-radius: 8px;
        padding: 12px;
        border: 1px solid #e1e1e1;
    }

    .btn-sign-in {
        background-color: #2ecc71;
        border: none;
        padding: 12px;
        border-radius: 8px;
        color: white;
        width: 100%;
    }

    .social-links {
        display: flex;
        gap: 20px;
    }

    .social-links a {
        color: #666;
        font-size: 20px;
    }

    .remember-forgot {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 15px 0;
    }

    h4 {
        display: inline-block;
        margin-right: 10px;
    }

    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .form-container {
        margin-top: 30px;
    }

    .text-danger {
        font-size: 0.9rem;
    }
    </style>

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/image.jpg" alt="Ocean view" class="banner-img">
                    <div class="card-body p-4">
                        <div class="header-container">
                            <h4>Sign In</h4>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                        <div class="form-container">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <input type="text" class="form-control mb-3" placeholder="Email" name="email"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <input type="password" class="form-control mb-3" placeholder="Password" name="password"
                                    required>
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <button type="submit" class="btn btn-sign-in">Sign In</button>
                                <div class="remember-forgot">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="remember">
                                        <label class="custom-control-label" for="remember">Remember Me</label>
                                    </div>
                                    <a href="#" class="text-muted">Forgot Password?</a>
                                </div>
                            </form>
                        </div>
                        <p class="text-center mb-0">
                            Not a member? <a href="#">Sign Up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
