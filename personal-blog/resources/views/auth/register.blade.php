<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!---------- BootStrap Min Css ---------->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!---------- FontAweSome Css ---------->
    <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <!---------- Style Css ---------->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

<div class="container-fluid">
    <div class="row align-items-center justify-content-center min-vh-100 bg-light">
        <div class="col-12 col-md-6 col-xl-4">
            <div class="bg-secondary rounded shadow-sm">
                <a href="/" class="d-flex justify-content-center">
                    <img src="{{ asset('images/pblog-logo.png') }}" alt="" style="width: 150px">
                </a>

                <div class="card">
                    <div class="card-body">

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" type="text" name="name" class="form-control"
                                       value="{{ old('name') }}" required autofocus>
                            </div>

                            <!-- Email Address -->
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" name="email" class="form-control"
                                       value="{{ old('email') }}" required autofocus>
                            </div>

                            <!-- Password -->
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" name="password" class="form-control"
                                       required autocomplete="new-password">
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control"
                                       required>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mt-4">
                                <a class="text-primary fw-bold" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <button type="submit" class="btn btn-secondary ms-2">Register</button>
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



