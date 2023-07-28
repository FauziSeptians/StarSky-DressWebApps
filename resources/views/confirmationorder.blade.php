@extends('template.main')


@section('content')

    <link rel="stylesheet" href="/css/payment.css">

<div class="container card">
    <div class="title"> Hello, {{$user->name}}</div>
    <div class="main"> <span id="sub-title">
            <p><b>Payment Summary</b></p>
        </span>
        <div class="row row-main">
            <div class="col-3"> <img class="img-fluid" src="/images/{{$products->Image}}.jpeg"> </div>
            <div class="col-5">
                <div class="row d-flex">
                    <p><b>{{$products->CompanyProduct}}</b></p>
                </div>
                <div class="row d-flex">
                    <p class="text-muted">{{$products->ProductName}}</p>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <p><b>@currency($products->Prices)</b></p>
            </div>
        </div>
    
        <hr>
        <div class="total">
            <div class="row">
                <div class="col" style="font-size: 14px">Payment ( BCA VIRTUAL ACCOUNT )</div>
                <div class="col d-flex justify-content-end" style="font-size: 14px">09642688665</div>
            </div>
            <div class="row mt-3">
                <div class="col"> <b> Total:</b> </div>
                <div class="col d-flex justify-content-end"> <b>@currency($products->Prices)</b> </div>
            </div> 
            <form action="/buytransaction" method="get">
                <button type="submit"  class="btn d-flex mx-auto" style="background-color: #972628; color: #FFFAF0;" > PROCESS </button>
        </form>
        </div>
    </div>
</div>



@endsection
