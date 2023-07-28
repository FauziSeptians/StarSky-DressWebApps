<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Models\games;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('Register.login');
});


Route::middleware(['auth', 'web'])->group(function () {

    Route::get('/home', [ProductsController::class,'showproducts'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/games', function () {
    return view('games');
});

Route::get('/checkout/{id}', [ProductsController::class,'productdetails']);

Route::post('/filtering',[ProductsController::class,'filtering']);
Route::get('/ecommerce',[ProductsController::class,'dataecommerce']);
Route::post('/transaction/{id}',[TransactionController::class,'transactions']);
Route::get('/buytransaction',[TransactionController::class,'buytransactions']);
Route::get('/admin',function(){
    return view('adminmenu');
});
Route::get('/banned',function(){
    return view('banned');
});
});

Route::get('/game',function(){
    if(games::where('player_2', null)->whereNot('player_1', Auth::user()->id)->exists()){
        $game = games::where('player_2', null)->whereNot('player_1', Auth::user()->id)->first();
        $game->player_2 = Auth::user()->id;
        $game->save();
        $roomId = $game->roomId;

        return view('games', compact('roomId'));
    } else {
        $game = new games();
        $game->player_1 = Auth::user()->id;
        $roomId = uniqid();
        $game->roomid = $roomId;
        $game->save();
        
        return view('games', compact('roomId'));
    }
});

Route::get('/reconnect',function(){


    if(games::where('player_1', Auth::user()->id)->exists()){
        if(games::where('player_1', Auth::user()->id)->where('player_2', null)->exists()){
            games::where('player_1', Auth::user()->id)->where('player_2', null)->delete();
        }

    } else if(games::where('player_2', Auth::user()->id)->exists()){
        DB::table('games')->where('player_2', Auth::user()->id)->update(['player_2', null]);
    }

    if(games::where('player_2', null)->whereNot('player_1', Auth::user()->id)->exists()){
        $game = games::where('player_2', null)->whereNot('player_1', Auth::user()->id)->first();
        $game->player_2 = Auth::user()->id;
        $game->save();

        dd($game);
        // $game = games::where('player_2', null)->whereNot('player_1', Auth::user()->id)->first();
        // if($game->player1->gender != Auth::user()->gender){
        //     $game->player_2 = Auth::user()->id;
        //     $game->save();
        //     $roomID = $game->roomID;
        //     // if(() ){
          

        //         return redirect()->route('home');
        //     // }
        //     // return redirect()->route('home');
        // } else {
        //     $game = new games();
        //     $game->player_1 = Auth::user()->id;
        //     $roomID = uniqid();
        //     $game->roomID = $roomID;
        //     $game->save();
            
        //     return redirect()->route('home');
        // }
    } else {
        $game = new games();
        $game->player_1 = Auth::user()->id;
        $roomID = uniqid();
        $game->roomID = $roomID;
        $game->save();
        
        return redirect()->route('home');
    }
    
});
Route::get('/usermanagement',[AdminController::class,'usertable']);
Route::post('/updatedata/{id}',[AdminController::class,'updatedata']);
Route::get('/updatedata/{id}',[AdminController::class,'updatedata']);
