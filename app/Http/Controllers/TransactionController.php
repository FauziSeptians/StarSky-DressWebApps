<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    public function transactions(Request $request, $id){
        
        $user = Auth::user();
        $products = Products::where('id', $id)->first();

        // dd($user['1']);
        
        $buy['color'] = $request->Color;
        $buy['Size'] = $request->Chart;

        Transaction::create([
            'CustomerID' => $user['id'],
            'ProductID' => $products['id'],
            'Payment' => "BCA VIRTUAL ACCOUNT",
        ]);

        return view('confirmationorder',compact('buy','user','products'));
    }

    public function buytransactions(){
  

        return view('successpay');
    }

}
