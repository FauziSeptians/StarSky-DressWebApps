@extends('template.main')

@section('content')

<div class="container p-5">
    <div class="judul" style="font-size: 30px; font-weight:700; color:#972628">
        Tic Tac Toe Games
    </div>
    <h2 id="message"></h2>
    <div class="row row-cols-3 col-8 bg-dark mb-4" id="board">
        <div class="col bg-warning border border-5 border-white p5">
            <h2 class="text-center">X</h2>
        </div>
    </div>

    <input type="text" value="" id="room">
    <button id="joinbtn" class="btn btn-primary rounded rounded-pill">JOIN</button>
</div>

<script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>
<script src="js/main.js"></script>

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


@endsection