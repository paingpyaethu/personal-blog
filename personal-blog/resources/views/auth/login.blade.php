<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!---------- BootStrap Min Css ---------->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!---------- FontAweSome Css ---------->
    <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <!---------- Style Css ---------->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center min-vh-100 bg-light">
        <div class="col-12 col-md-6 col-xl-4">
            <div class="bg-secondary rounded shadow-sm">
                <a href="/" class="d-flex justify-content-center">
                    <img src="{{ asset('images/pblog-logo.png') }}" alt="" style="width: 150px">
                </a>

                <div class="card">
                    <div class="card-body">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email"
                                       class="form-control @if(session('status')) is-valid @endif @error('email') is-invalid @enderror"
                                       value="{{ old('email') }}"  autofocus>
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" name="password"
                                       class="form-control @if(session('status')) is-valid @endif @error('password') is-invalid @enderror"
                                       autocomplete="current-password">
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mt-4">
                                @if (Route::has('password.request'))
                                    <a class="text-sm text-danger fw-bold" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <div class="">
                                    <a href="{{ route('register') }}">
                                        <button type="button" class="btn btn-outline-secondary me-2">Register</button>
                                    </a>
                                    <button type="submit" class="btn btn-secondary">Log in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<!---------- BootStrap Bundle JS ---------->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!---------- JQuery JS ---------->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!---------- Main JS ---------->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>




