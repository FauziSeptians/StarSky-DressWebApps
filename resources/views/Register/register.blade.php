<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN FORM</title>
    <script src=""></script>
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

    <div class="body-login m-3">
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
        <div class="container section-form p-5" style=" width:40%; height:98vh">
            <div class="container konten-form">
                <div class="judul text-center mb-4">
                    REGISTER
                </div>
                <div class="formlogin mt-4">
                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group  mb-3">
                            <input type="text" id="name" class="form-control form-login @error('Fullname') is-invalid @enderror" name="Fullname" placeholder="FullName"
                                required >
                            @error('Fullname')
                                <div id="Fullname" class="invalid-feedback">    
                                    hallo
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text form-login" id="basic-addon1">DT</span>
                                </div>
                                <input type="text" class="form-control form-login" placeholder="Dating Code"
                                    aria-label="Dating Code" aria-describedby="basic-addon1" name="datingCode" required>
                            </div>
                            <div class="col form-group mb-3">
                                <input type="date" class="form-control form-login" id="exampleInputPassword1"
                                    placeholder="Birthdate" name="birthDate" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col container-gender">
                                <select class="form-select form-login mb-3" aria-label="Default select example"
                                    name="gender">
                                    <option selected>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text form-login" id="basic-addon1">+62</span>
                                </div>
                                <input type="number" class="form-control form-login" placeholder="Phone Number"
                                    aria-label="Dating Code" aria-describedby="basic-addon1" name="phonenumber"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-login" id="exampleInputPassword1"
                                placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control form-login" id="exampleInputPassword1"
                                placeholder="Password" name="password" required>
                        </div>

                        <div class="form-group mt-3">
                            <input type="file" class="form-control form-login" id="exampleInputPassword1"
                                placeholder="Image photo" name="image" required>
                        </div>
                        <button type="submit" class="btn container btn-submit mt-3">REGISTER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
