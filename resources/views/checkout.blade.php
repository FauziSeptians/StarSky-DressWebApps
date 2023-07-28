@extends('template.main')
@section('content')
<style>
    .unchecked {
        color: white;
    }

    .butotn-checkout {
        background-color: #972628;
        color: #FFFAF0;
    }

    .butotn-checkout:hover {
        background-color: #FFFAF0;
        color: #972628;
    }

    .kotak-itemSize {
        border: 1px solid rgb(0, 0, 0, 0.2);
    }

    .special {
        outline: max(2px, 0.15em) solid red;
        outline-offset: max(2px, 0.15em);
    }

    .kotak-itemColor {
        /* Styles for the radio button */
    }

    .kotak-itemColor:checked::after {
        outline: max(2px, 0.15em) solid currentColor;
        outline-offset: max(2px, 0.15em);
        position: absolute;
        top: 0;
        left: 0;
        width: 200px;
        height: 200px;
        background-color: red;
        /* Default background color */
    }

</style>

{{-- <body> --}}



<div class="body-login">
    <div class="container foto-slider m-3" style=" width:60%; height:92vh">
        <img src="/images/{{$products->Image}}.jpeg" alt="" srcset="">
    </div>
    {{-- <form action="/transaction" method="post">
            @csrf --}}
    <form action="/transaction/{{$products->id}}" method="post" class="container section-form p-5" style=" width:40%; height:98vh">
        @csrf
        <div class="container konten-form">
            <div class="judulMerkDanRating mb-4">
                <div class="merk">
                    {{$products->CompanyProduct}}
                </div>
                <div class="RatingBarang">
                    <div class="namabarang" style="margin-right: 5px">
                        {{$products->ProductName}} |
                    </div>
                    <div class="ratingbarang">
                        @for ($i = 1 ; $i <= 5; $i++) @if ($i <=$products->Rating)
                            <span class="fa fa-star checked" style="margin-right:10px"></span>
                            @else
                            <span class="fa fa-star unchecked"
                                style="margin-right:10px; style:background-color:white"></span>
                            @endif
                            @endfor


                    </div>
                </div>
            </div>
            <div class="harga">
                @currency($products->Prices)
            </div>
            <div class="konttn-form-transaction">
                <div class="colorSize mt-4">
                    <div class="colorDiv">
                        <div class="colorJudul mb-2">
                            COLOR
                        </div>
                        <div class="tab-color d-flex gap-3">
                            @for ($i = 0 ; $i
                            < $countColor; $i++) <input class="btn-transaction btn-pickColor kotak-itemColor"
                                type="radio" name="Pick" value="{{$products->AditionalColor[$i]}}"
                                style="appearance: none; background-color: {{$products->AditionalColor[$i]}} ;" />
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="sizeDiv mt-3">
                    <div class="sizeJudul mb-2">
                        SIZE
                    </div>
                    <div class="tab-size d-flex gap-3 mb-3">
                        @for ($i = 0 ; $i <$countSize ; $i++) <div class="divkotak" style="position: relative">
                            <input class="btn-transaction btn btn-pickItem kotak-itemSize text-center" type="radio"
                                name="Chart" value="{{$products->AditionalSize[$i]}}" style="appearance: none;"
                                id="chartradio" />
                            <div class="label" style="position: absolute; top:14px; left:17px;">
                                {{$products->AditionalSize[$i]}}
                            </div>
                    </div>
                    @endfor
                </div>


                <div class="contain-color mt-3" id="contain-color" style="border-top:1px dotted rgb(0, 0, 0,0.2); display:none;">
                    <div class="sizeJudul judul-color mb-3 mt-3">
                        DETAIL BUYING
                    </div>
                    <div class="row color mb-3">
                        <div class="col sizeJudul">
                            Color
                        </div>
                        <div class="col color-buy" id="color-buy" style="background-color: #FFFAF0">
                            {{-- test1 --}}
                        </div>
                    </div>
                    <div class="row color mb-3">
                        <div class="col sizeJudul">
                            Size
                        </div>
                        <div class="col size-buy" id="size-buy">
                            -
                        </div>
                    </div>
                </div>



                <button type="submit" class="btn container btn-submit mt-4 butotn-checkout">CHECK OUT</button>
            </div>
        </div>

    </form>


    <script>
        const radioButtons = document.getElementsByName('Pick');
        const radioButtons1 = document.getElementsByName('Chart');

        // console.log(radioButtons.length);
        // console.log(radioButtons[2].value)



        radioButtons.forEach(function (radioButton) {
            // function hallow(radioButton){
            // console.log(radioButton.value);
            radioButton.addEventListener('click', function () {
                // console.log(radioButton.value);
                let button = document.getElementById('contain-color');
                let color = document.getElementById('color-buy');

                button.style.display = 'block';
                color.style.backgroundColor = radioButton.value;    
            });
            // const colorValue = radioButtons[1].value;
            // const divkotak = this.parentElement;
            // divkotak.style.backgroundColor = colorValue;
            // console.log(colorValue);
            // }

        });

        radioButtons1.forEach(function (radioButton) {
            // function hallow(radioButton){
            // console.log(radioButton.value);
            radioButton.addEventListener('click', function () {
                // console.log(radioButton.value);
                let button = document.getElementById('contain-color');
                let size = document.getElementById('size-buy');

                button.style.display = 'block';
                size.innerHTML = radioButton.value;    
            });
            // const colorValue = radioButtons[1].value;
            // const divkotak = this.parentElement;
            // divkotak.style.backgroundColor = colorValue;
            // console.log(colorValue);
            // }

        });

    </script>



</div>
</div>


{{-- </body> --}}
@endsection
