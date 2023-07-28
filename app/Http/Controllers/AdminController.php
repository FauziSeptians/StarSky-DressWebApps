<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function usertable(){
        $user = User::all();

        return view('pagesprofile',compact('user'));
    }

    public function updatedata(Request $request,$id){

        // dd($request);

        $user = User::all();
        $userchange = User::where('id',$id)->first();
        $userchange->Banned = $request->StatusBanned;
        $userchange->save();


        return view('pagesprofile',compact('user'));
    }

}
