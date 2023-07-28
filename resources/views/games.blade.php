@extends('template.main')

@section('content')

<style>
    body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>




<div class="container text-center">
    <div class="containe-text mb-4">
        <div class="judul" style="font-size: 30px; font-weight:700; color:#972628">
            Tic Tac Toe Games
        </div>
        <h2 id="message"></h2>
    </div>
    <div class="container d-flex justify-content-center mt-4">
        <div class="row row-cols-3 col-8 mb-4 text-center" id="board">
            <div class="col bg-warning border border-5 border-white p5">
                <h2 class="text-center">X</h2>
            </div>
        </div>
    </div>

    <div class="container-inputan" id="inputan" style="display: none;">
        <input type="text" value="" id="room">
    <button id="joinbtn" class="btn btn-primary rounded rounded-pill">JOIN</button>
    </div>
    
</div>

<script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="js/index.js"></script>

<script>
    $(document).ready(function(){
        // console.log('ready');
        $('#join-btn').click();

        $(window).bind('unload', function(){
            $.ajax({
                url: '/reconnect',
                method: 'GET'
            });
        });


    })
</script>

<script>
        // console.log(1)
        // window.onload(function(){
            var randNum =  Math.floor(Math.random() * 5) + 1;
            let input = document.getElementById("room");

            console.log(input.value);

            // console.log(randNum);
            input.value = randNum;

            let click = document.getElementById("joinbtn").click();

            let pesan = document.getElementById("message");

            console.log(pesan);
        // })
</script>


@endsection