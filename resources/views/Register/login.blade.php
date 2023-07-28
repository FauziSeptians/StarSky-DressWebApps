<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN FORM</title>
    <script src=""></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <div class="body-login m-3">
        {{-- <div class="container foto-slider" style=" width:60%; height:98vh"> --}}
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style=" width:60%; height:98vh">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/batik1.jpeg" class="d-block w-100"
                    style=" width:60%; height:97vh; object-fit:cover; border-radius:20px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/batik3.jpeg" class="d-block w-100" alt="..."  style=" width:60%; height:97vh; object-fit:cover; border-radius:20px">
                </div>
                <div class="carousel-item">
                    <img src="images/batik4.jpeg" class="d-block w-100" alt="..."  style=" width:60%; height:97vh; object-fit:cover; border-radius:20px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- </div> --}}
        <div class="container section-form p-5" style=" width:40%; height:98vh">
            <div class="container konten-form">
                <div class="judul text-center mb-4">
                    Welcome Back!
                </div>
                <div class="formlogin mt-4">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" id="email" class="form-control form-login @error('email')
                                is-invalid @enderror" placeholder="Email" name="email" required>
                            @error('email')
                            <div id="email" class="invalid-feedback">
                                yrdy
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control form-login" id="exampleInputPassword1"
                                placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn container btn-submit mt-3">LOGIN</button>
                    </form>
                </div>

                <div class="signin-link text-center">
                    Already Have Account ?
                    <a href="/register">SIGN IN </a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
