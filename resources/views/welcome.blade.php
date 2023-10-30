<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <section class="login d-flex" style="height: 100vh;">
        <div class="login-left bg-white w-50 h-100">

        </div>

<!-- right-box -->
        <div class="login-right bg-primary w-50 h-100">
            <div class="row justify-content-center align-items-center w-100 h-100 border-3">
                <div class="d-flex justify-content-center">
                    <img class="m-3 position-absolute" src="img/Untitled design.png" alt="" style="width: 150px;">
                </div>
                <div class="col-6 bg-body p-5 rounded-5">
                    <div class="header-text text-center mt-4 mb-4">
                        <h2>Welcome</h2>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email Adress">
                    </div>
                    <div class="input-group mb-5">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
    
                    <div class="input-group mb-5">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
