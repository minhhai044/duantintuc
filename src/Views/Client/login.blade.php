<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/login/index.css') }}">
</head>

<body>
    {{-- <h2>Sign in/Sign up </h2> --}}

    @if (!empty($_SESSION['error']))
        <div class="alert alert-danger">
            {{ $_SESSION['error'] }}
        </div>
    @endif
    @php
        unset($_SESSION['error']);
    @endphp
    @if (!empty($_SESSION['errors']))
        <div class="alert alert-danger">
            @foreach ($_SESSION['errors'] as $err)
                <li>{{$err}}</li>
            @endforeach
        </div>
    @endif
    @php
        unset($_SESSION['errors']);
    @endphp
    @if (isset($_SESSION['status']) && $_SESSION['status'])
    <div class="alert alert-success">
        {{ $_SESSION['msg'] }}
    </div>

    @php
        unset($_SESSION['status']);
        unset($_SESSION['msg']);
    @endphp
@endif
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ url('createaccount') }}" method="post">
                <h1>Create Account</h1>
                {{-- <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div> --}}
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" name="name" />
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="password" />
                <input type="password" placeholder="Confirm password" name="confirm_password" />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{ url('handlelogin') }}" method="post">
                <h1>Sign in</h1>
                {{-- <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div> --}}
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/login/index.js') }}"></script>
</body>

</html>
