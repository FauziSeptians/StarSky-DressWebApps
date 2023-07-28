<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
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

Route::get('/home', [ProductsController::class,'showproducts']);


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


Route::get('/game',function(){
    if(games::where('player_2', null)->whereNot('player_1', Auth::user()->id)->exists()){
        $game = games::where('player_2', null)->whereNot('player_1', Auth::user()->id)->first();
        $game->player_2 = Auth::user()->id;
        $game->save();
        $roomId = $game->roomId;

        return view('tictac', compact('roomId'));
    } else {
        $game = new games();
        $game->player_1 = Auth::user()->id;
        $roomId = uniqid();
        $game->roomid = $roomId;
        $game->save();
        
        return view('tictac', compact('roomId'));
    }
});

Route::get('/reconnect',function(){
    if(game::where('player_1', Auth::user()->id)->exists()){
        if(game::where('player_1', Auth::user()->id)->where('player_2', null)->exists()){
            game::where('player_1', Auth::user()->id)->where('player_2', null)->delete();
        }

        $game = game::where('player_2', Auth::user()->id)->first();
        $game->player_1 = $game->player_2;
        $game->player_2 = null;
        $game->save();
    } else if(game::where('player_2', Auth::user()->id)->exists()){
        DB::table('games')->where('player_2', Auth::user()->id)->update(['player_2', null]);
    }
});

Route::post('/filtering',[ProductsController::class,'filtering']);
Route::get('/ecommerce',[ProductsController::class,'dataecommerce']);
Route::post('/transaction/{id}',[TransactionController::class,'transactions']);
Route::get('/buytransaction',[TransactionController::class,'buytransactions']);
Route::get('/admin',function(){
    return view('adminmenu');
});

Route::get('/usermanagement',[AdminController::class,'usertable']);
Route::post('/updatedata/{id}',[AdminController::class,'updatedata']);
Route::get('/updatedata/{id}',[AdminController::class,'updatedata']);
Route::get('/banned',function(){
    return view('banned');
});






