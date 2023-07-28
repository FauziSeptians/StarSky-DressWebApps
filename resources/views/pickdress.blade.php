<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider Sandbox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <style>
        /* body {
            display: flex;
            align-items: center;
            width: 100%;
            height: 100vh;
            background-color: #FFFAF0;
            overflow: hidden;
        } */

        body {
            overflow: hidden;
            background-color: #FFFAF0;
        }

        .slide-container {
            width: 100%;
            height: 80vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background-color: dred;
        }

        .image-slider {
            width: 100%;
            height: 600px;
            position: relative;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 1s;
        }

        .slides-div {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 30px;
        }

        .img {
            position: relative;
            width: 240px;
            height: 370px;
            transition: 0.5s;
        }

        .button {
            position: relative;
            width: 240px;
            height: 100%;
            animation-name: mymove;
            background-color: rgb(255, 250, 240, 0.2);

        }

        #textkonten5,
        #textkonten4,
        #textkonten3,
        #textkonten2,
        #textkonten1 {
            display: none;
        }

        .nama {
            display: none;
        }

        .checkout {
            display: none;
        }

        #slider-span1:target~.image-slider #img1,
        #slider-span1:target~.image-slider #button-1,
        #slider-span1:target~.image-slider #textkonten {
            width: 380px;
            height: 585px;
            background-color: transparent;
        }

        #slider-span2:target~.image-slider #img2,
        #slider-span2:target~.image-slider #button-2,
        #slider-span2:target~.image-slider #textkonten {
            width: 380px;
            height: 585px;
            background-color: transparent;
        }

        #slider-span3:target~.image-slider #img3,
        #slider-span3:target~.image-slider #button-3,
        #slider-span3:target~.image-slider #textkonten {
            width: 380px;
            height: 585px;
            background-color: transparent;
        }

        #slider-span4:target~.image-slider #img4,
        #slider-span4:target~.image-slider #button-4,
        #slider-span4:target~.image-slider #textkonten {
            width: 380px;
            height: 585px;
            background-color: transparent;
        }

        #slider-span5:target~.image-slider #img5,
        #slider-span5:target~.image-slider #button-5,
        #slider-span5:target~.image-slider #textkonten {
            width: 380px;
            height: 585px;
            background-color: transparent;
        }

        #slider-span5:target~.image-slider #textkonten5 {
            display: block;
            background-color: rgb(255, 250, 240, 0.6);
            position: absolute;
            bottom: 0;
            height: 100px;
        }

        #slider-span5:target~.image-slider #textkonten5 .nama {
            display: block;
        }

        #slider-span5:target~.image-slider #textkonten5 .checkout {
            display: block;
        }


        #slider-span4:target~.image-slider #textkonten4 {
            display: block;
            background-color: rgb(255, 250, 240, 0.6);
            position: absolute;
            bottom: 0;
            height: 100px;
        }

        #slider-span4:target~.image-slider #textkonten4 .nama {
            display: block;
        }

        #slider-span4:target~.image-slider #textkonten4 .checkout {
            display: block;
        }


        #slider-span3:target~.image-slider #textkonten3 {
            display: block;
            background-color: rgb(255, 250, 240, 0.6);
            position: absolute;
            bottom: 0;
            height: 100px;
        }

        #slider-span3:target~.image-slider #textkonten3 .nama,
        #slider-span3:target~.image-slider #textkonten3 .checkout {
            display: block;
        }


        #slider-span2:target~.image-slider #textkonten2 {
            display: block;
            background-color: rgb(255, 250, 240, 0.6);
            position: absolute;
            bottom: 0;

            height: 100px;
            width: 380px;
        }

        #slider-span2:target~.image-slider #textkonten2 .nama,
        #slider-span2:target~.image-slider #textkonten2 .checkout {
            display: block;
        }

        #slider-span1:target~.image-slider #textkonten1 {
            display: block;
            background-color: rgb(255, 250, 240, 0.6);
            position: absolute;
            bottom: 0;
            height: 100px;
        }

        #slider-span1:target~.image-slider #textkonten1 .nama,
        #slider-span1:target~.image-slider #textkonten1 .checkout {
            display: block;
        }

        #slider-span5:target~.image-slider #button-5 {
            display: none;
        }

        #slider-span4:target~.image-slider #button-4 {
            display: none;
        }

        #slider-span3:target~.image-slider #button-3 {
            display: none;
        }

        #slider-span2:target~.image-slider #button-2 {
            display: none;
        }

        #slider-span1:target~.image-slider #button-1 {
            display: none;
        }

        #slider-span1:target~.image-slider {
            left: 10%;
        }

        #slider-span2:target~.image-slider {
            left: 10%;
        }

        #slider-span3:target~.image-slider {
            left: 0%;
        }

        #slider-span4:target~.image-slider {
            left: -10%;
        }

        #slider-span5:target~.image-slider {
            left: -10%;
        }

        .container-keseluruhanbody {
            margin: 50px;
        }

        .btn-close {
            float: right;
            font-size: 21px;
            font-weight: 700;
            line-height: 1;
            color: #972628;
            text-shadow: 0 1px 0 #972628;
            filter: alpha(opacity=20);
            opacity: .2;
        }

        .konten-canvas {
            border: none;
            background-color: transparent;
            width: 100%;
        }

        .konten-canvas:hover {
            border: 1px solid #972628;
            transition: border 0.5s ease;
            /* Add the pulsing animation to the border */
            animation: animate 1s linear forwards;
        }

        input[type='range']::-webkit-slider-thumb {
            width: 15px;
            -webkit-appearance: none;
            height: 15px;
            background: #972628;
            border-radius: 10px;
        }

        .checkout:hover {
            cursor: pointer;
        }

    </style>
</head>

<body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="container-keseluruhanbody">
        <div class=" mb-3">
            <nav class="" style="display: flex; justify-content:end">
                <div class="" style="display: flex; justify-content:end">
                    <button type="button" class="btn btn-primary btn-m" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                        style="background-color: #972628; color:white; border:none; margin-right:30px">Filter</button>
                    {{-- <nav class="navbar navbar-light bg-light"> --}}
                    {{-- <div class="container"> --}}

                    <button class="" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                        aria-controls="offcanvasWithBothOptions" style="border:none; background-color:transparent;">
                        <i class="bi bi-list" style="color: #972628; font-size:35px"></i>
                    </button>

                    <div class="offcanvas offcanvas-end p-5" data-bs-scroll="true" tabindex="-1"
                        id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel"
                        style="background-color: #FFFAF0">
                        <div class="offcanvas-header" style="justify-content: end">
                            <button type="button" class="btn-close btn-lg" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body mt-3">
                            <a class="container-profile p-4 d-flex align-items-center konten-canvas" href="/profile">
                                <div class="image" style="margin-right: 60px">
                                    <img src="/images/profile.png" alt="" srcset="">
                                </div>
                                <div class="textprofile" style="color: #972628">
                                    PROFILE
                                </div>
                            </a>

                            <a class="container-aboutus p-4 d-flex align-items-center konten-canvas" href="/ecommerce">
                                <div class="imageaboutus" style="margin-right: 60px">
                                    <img src="/images/cart.png" alt="" srcset="">
                                </div>
                                <div class="textaboutus" style="color: #972628">
                                    E-COMMERCE
                                </div>
                            </a>

                            <a class="container-aboutus p-4 d-flex align-items-center konten-canvas" href="/aboutus">
                                <div class="imageaboutus" style="margin-right: 60px">
                                    <img src="/images/aboutus.png" alt="" srcset="">
                                </div>
                                <div class="textaboutus" style="color: #972628">
                                    ABOUT US
                                </div>
                            </a>

                            <form class="form" action="{{route('logout')}}" method="post">
                                @csrf
                                <button class="container-logout p-4 d-flex align-items-center konten-canvas"
                                    type="submit">
                                    <div class="imagelogout" style="margin-right: 60px">
                                        <img src="/images/logout.png" alt="" srcset="">
                                    </div>
                                    <div class="textlogout" style="color: #972628">
                                        LOGOUT
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- </nav> --}}
        </div>

        </nav>
    </div>



    <div class="slide-container">
        <span class="slider-span" id="slider-span1"></span>
        <span class="slider-span" id="slider-span2"></span>
        <span class="slider-span" id="slider-span3"></span>
        <span class="slider-span" id="slider-span4"></span>
        <span class="slider-span" id="slider-span5"></span>


        <div class="image-slider">
            <div class="konten-dress">
                <div class="slides-div" id="slide-1" style="position: relative">
                    <img src="/images/{{$products[0]->Image}}.jpeg" alt="" class="img" id="img1">
                    <div class="container d-flex align-items-center justify-content-between textkonten"
                        id="textkonten1">
                        <div class="nama" id="nama" style="font-size: 20px; font-weight:600; letter-spacing:1px">
                            {{$products[0]->ProductName}}
                        </div>
                        <a href="/checkout/{{$products[0]->id}}" class="checkout"
                            style="background-color: #972628; padding-left:15px; padding-right:15px; padding-top:5px; padding-bottom:5px; border-radius:10px; color:#FFFAF0">
                            DETAIL
                        </a>
                    </div>
                    <a href="#slider-span1" class="button" id="button-1" style="position: absolute; left:0; top:0"></a>
                </div>
            </div>

            <div class="slides-div" id="slide-2">
                <div class="container" style=" position: relative;">
                    <img src="/images/{{$products[1]->Image}}.jpeg" alt="" class="img" id="img2">
                    <div class="container d-flex align-items-center justify-content-between textkonten p-3 m-0"
                        id="textkonten2">
                        <div class="nama" id="nama" style="font-size: 20px; font-weight:600; letter-spacing:1px">
                            {{$products[1]->ProductName}}
                        </div>
                        <a href="/checkout/{{$products[1]->id}}" class="checkout"
                            style="background-color: #972628; padding-left:15px; padding-right:15px; padding-top:5px; padding-bottom:5px; border-radius:10px; color:#FFFAF0">
                            DETAIL
                        </a>
                    </div>
                    <a href="#slider-span2" class="button" id="button-2" style="position: absolute; left:12; top:0"></a>
                </div>


            </div>
            <div class="slides-div" id="slide-3" style=" position: relative;">
                <img src="/images/{{$products[2]->Image}}.jpeg" alt="" class="img" id="img3">
                <a href="#slider-span3" class="button" id="button-3" style="position: absolute; left:0; top:0"></a>
                <div class="container d-flex align-items-center justify-content-between textkonten" id="textkonten3">
                    <div class="nama" style="font-size: 20px; font-weight:600; letter-spacing:1px">
                        {{$products[2]->ProductName}}
                    </div>
                    <a href="/checkout/{{$products[2]->id}}" class="checkout"
                        style="background-color: #972628; padding-left:15px; padding-right:15px; padding-top:5px; padding-bottom:5px; border-radius:10px; color:#FFFAF0">
                        DETAIL
                    </a>
                    <a href="#slider-span3" class="button" id="button-3" style="position: absolute; left:0; top:0"></a>
                </div>
            </div>
            <div class="slides-div" id="slide-4 " style=" position: relative;">
                <img src="/images/{{$products[3]->Image}}.jpeg" alt="" class="img" id="img4">
                <div class="container d-flex align-items-center justify-content-between textkonten" id="textkonten4">
                    <div class="nama" id="nama" style="font-size: 20px; font-weight:600; letter-spacing:1px">
                        {{$products[3]->ProductName}}
                    </div>
                    <a href="/checkout/{{$products[3]->id}}" class="checkout"
                        style="background-color: #972628; padding-left:15px; padding-right:15px; padding-top:5px; padding-bottom:5px; border-radius:10px; color:#FFFAF0">
                        DETAIL
                    </a>
                </div>
                <a href="#slider-span4" class="button" id="button-4" style="position: absolute; left:0; top:0"></a>
            </div>
            <div class="slides-div" id="slide-5" style=" position: relative;">
                <img src="/images/{{$products[4]->Image}}.jpeg" alt="" class="img" id="img5">
                <div class="container d-flex align-items-center justify-content-between textkonten" id="textkonten5">
                    <div class="nama" style="font-size: 20px; font-weight:600; letter-spacing:1px;">
                        {{$products[4]->ProductName}}
                    </div>
                    <a href="/checkout/{{$products[4]->id}}" class="checkout"
                        style=" background-color: #972628; padding-left:15px; padding-right:15px; padding-top:5px; padding-bottom:5px; border-radius:10px; color:#FFFAF0">
                        DETAIL
                    </a>
                </div>
                <a href="#slider-span5" class="button" id="button-5" style="position: absolute; left:0; top:0"></a>
            </div>
        </div>
    </div>
    </div>

    <form action="/filtering" method="post">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-4" style="background-color: #FFFAF0">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-size:30px; letter-spacing:1px">
                            FILTERING</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mb-3">
                        <div class="dropdown">
                            <label for="location mb-3">Location</label>
                            <select class="btn btn-secondary dropdown-toggle mt-3" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false"
                                style="width: 100%; color:black; background-color:#FFFAF0; border:0.1px ridge rgb(0, 0, 0 , 0.3)"
                                id="location" name="location">
                                @foreach ($location as $l)
                                <option class="p-3" style="margin-top: 20px" {{$l->Location}}">{{$l->Location}}</option>
                                @endforeach
                            </select>
                            {{-- <div class="dropdown-menu text-center" style="width:100%">
                               
                            </div> --}}
                        </div>
                        <div class="range-biaya mt-3">
                            <label for="customRange2 mb-3" class="form-label">Min Price</label>
                            <div class="row">
                                <div class="col-9">
                                    <input type="range" class="form-range mt-3" min="0" max="50000000" id="customRange2"
                                        name="MinPrice">
                                </div>
                                <div class="col-3 d-flex">
                                    <div class="rp" style="margin-right: 3px">
                                        Rp
                                    </div>
                                    <div class="valueinput" id="valueinput">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="range-biaya mt-3">
                            <label for="customRange2 mb-3" class="form-label">Max Price</label>
                            <div class="row">
                                <div class="col-9">
                                    <input type="range" class="form-range mt-3" min="0" max="50000000" id="customRange3"
                                        name="MaxPrice">
                                </div>
                                <div class="col-3 d-flex align-items-end">
                                    <div class="rp" style="margin-right: 3px">
                                        Rp
                                    </div>
                                    <div class="valueinput1" id="valueinput1">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                        <button type="submit" class="btn" style="background-color: #972628; color:#FFFAF0">Save
                            changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>



<script>
    window.onload = function () {
        let clicking = document.getElementById('button-3');

        clicking.click();
    }

    var rangeInput = document.getElementById("customRange2");
    var rangeInput1 = document.getElementById("customRange3");

    // Tambahkan event listener untuk mendeteksi perubahan pada input range
    rangeInput.addEventListener("input", function () {
        // Dapatkan nilai (value) dari input range
        var value = rangeInput.value;

        let canvas = document.getElementById("valueinput");

        canvas.innerHTML = value;


        // Tampilkan nilai (value) pada console atau di tempat lain yang diinginkan

    });

    rangeInput1.addEventListener("input", function () {
        // Dapatkan nilai (value) dari input range
        var value = rangeInput1.value;

        let canvas = document.getElementById("valueinput1");

        canvas.innerHTML = value;


        // Tampilkan nilai (value) pada console atau di tempat lain yang diinginkan

    });

</script>



</html>
