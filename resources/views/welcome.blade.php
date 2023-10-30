<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="{{ asset('/') }}/images/sihadirlogo2.png" class="img-fluid rounded-5">
                </div>
                <p class="text-white fs-2 fw-bold">SiHadir</p>
                <small class="text-white text-wrap text-center" style="width: 17rem;">Absensi lebih praktis hanya di <strong>SiHadir</strong></small>
            </div>
            <div class="col-md-6 right-box d-flex flex-column justify-content-evenly">
                @guest
                <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="row align-items-center">
                    <div class="header-text mb-4 text-center">
                        <h2>Login</h2>
                        <p>Input your email, and password</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address">
                    </div>
                    <div class="input-group mb-5">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
                    <div class="input-group mb-5">
                        <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                    </div>
                </div>
                </form>
                @endguest
                @auth
                <div class="row align-items-center">
                    <div class="header-text mb-4 text-center">
                        <h2>You Have Logged In</h2>
                        <p>Go back to dashboard, or Logout</p>
                    </div>
                    <div class="input-group mb-5">
                        <button type="submit" class="btn btn-lg btn-primary w-100 fs-6"><a href="{{ url('/home') }}">Back</a></button>
                    </div>
                    <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <div class="input-group mb-5">
                        <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Logout</button>
                    </div>
                    </form>
                </div>
                @endauth
            </div>
        </div>
    </div>
</body>
</html>

<style>
    .body {
        background: #ececec;
    }
    .featured-image img{
        width: 250px;
    }
    .box-area{
        width: 1100px;
        height: 600px;
    }
    .right-box{
        padding: 40px 30px 40px 40px;
    }
    ::placeholder{
        font-size: 16px;
    }

    @media only screen and (max-width: 768px) {
        .box-area{
            margin: 0 10px;

        }
        .left-box{
            height: 250px;
            overflow: hidden;
        }
        .featured-image img{
            width: 150px;
        }
        .right-box{
            padding: 20px;
        }
    }
</style>