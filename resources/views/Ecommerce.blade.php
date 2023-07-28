    <!-- ***** Preloader Start ***** -->

    @extends('template.main')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>


    @section('content')
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <style>
        .button {
            position: absolute;
            width: 240px;
            height: 100%;
            transition: 0.5s;
            background-color: rgb(255, 250, 240, 0.6)
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

        .items:hover {
            transform: scale(1.1);
            animation-duration: 750000s;
        }


        h2 {
            font: 400 25px/1.3 'Lobster Two', Helvetica, sans-serif;
            color: #972628;
            text-shadow: 1px 1px 0px #ededed, 4px 4px 0px rgba(0, 0, 0, 0.15);
        }

    </style>




    <!-- ***** Main Banner Area Start ***** -->
    <div class="navbar-konten mb-3" style="margin-left: 80px; margin-right:80px" id="top">
        <div class="konten-nav">
            <div class="row">
                <div class="mt-4 mb-4" style="display: flex; justify-content:space-between; align-items:center">
                    <div class="judul-website .fontjudul">
                        <h2>Sky Universe</h2>
                    </div>
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
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    <section class="section" id="Images">
        <div class="konten-image" style="margin-left:80px; margin-right:80px;">
            <img src="/images/thumbnail.avif" alt="" srcset="" class="img-fluid" style="border-radius: 5px">
        </div>
    </section>

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>RECOMENDATION</h2>
                        <span>Recomendation for you two to get the best dress.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            @foreach ($products as $p)
                            <div class="item p-3"
                                style="background-color:hsl(0, 0%, 16%); border-radius:5px; box-shadow:1px solid black;">
                                <div class="thumb">
                                    <div class="hover-content">
                                        {{-- <ul> --}}
                                        {{-- <li> --}}
                                        <a href="/checkout/{{$p->id}}">
                                            <i class="p-3 fa fa-shopping-cart"
                                                style="color: #972628; background-color:#FFFAF0"></i>
                                        </a>
                                        {{-- </li>
                                        </ul> --}}
                                    </div>

                                    <img src="images/{{$p->Image}}.jpeg" alt=""
                                        style="width:320px; height:380px; object-fit:cover;">
                                </div>
                                <div class="down-content" style="background-color: #2a2a2a;color:#FFFAF0">
                                    <h4 style="background-color: #2a2a2a;color:#FFFAF0">{{$p->ProductName}}</h4>
                                    <span>@currency($p->Prices)</span>
                                    <ul class="stars">
                                        @for ($i = 1; $i <= $p->Rating; $i++)
                                            <li><i class="fa fa-star"></i></li>
                                            @endfor
                                    </ul>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>PRODUCT</h2>
                        <span>This is our brand with high quality dress</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-around">
                @foreach ($products as $p)
                <div class="items p-3 m-2" style="border-radius:10px; width:360px;">
                    <div class="thumb">
                        <div class="hover-content">
                            <a href="/checkout/{{$p->id}}">
                                <i class="p-3 fa fa-shopping-cart" style="color: #972628; background-color:#FFFAF0"></i>
                            </a>
                        </div>

                        <img src="images/{{$p->Image}}.jpeg" alt="" style="width:100%; height:380px; object-fit:cover">
                    </div>
                    <div class="down-content"
                        style="border:1px solid rgb(0, 0, 0, 0.2); border-radius: 0px 0px 20px 20px; padding:20px; background-color:transparent;">
                        <div class="sidekiri">
                            <h4>{{$p->ProductName}}</h4>
                            <span>@currency($p->Prices)</span>
                        </div>
                        {{-- <div class="sidekanan" style="background-color: #972628"> --}}
                            <ul class="stars" style="margin-right: 20px">
                                @for ($i = 1; $i <= $p->Rating; $i++)
                                    <li><i class="fa fa-star"></i></li>
                                    @endfor
                            </ul>
                        {{-- </div> --}}
                    </div>
                </div>

                @endforeach
            </div>




            {{-- <div class="mt-4 ">
                {!! $products->links() !!}
            </div>  --}}
        </div>

    </section>

 
    <footer>
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <div class="judul-website .fontjudul">
                                <h2>Sky Universe</h2>
                            </div>
                        </div>
                        <ul>
                            <li><a href="#">Sindanglaya no 83 RT 02 RW 11, Kode Pos 40195</a></li>
                            <li><a href="#">muhammad.putra1418@gmai.com</a></li>
                            <li><a href="#">0821-1586-5151</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#top">Promos</a></li>
                        <li><a href="#men">Recomendation</a></li>
                        <li><a href="#women">Dress Product</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Sky Universe</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 Sky Universe Co., Ltd. All Rights Reserved.
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(function () {
            var selectedClass = "";
            $("p").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function () {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });

    </script>
    @endsection
