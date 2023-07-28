<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('Register.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $validateddata = $request->validate([
            'Fullname' => ['required', 'string', 'max:20','min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'datingCode' => ['required', 'max:3'],
            'birthDate'=>['required'],
            'gender'=>['required'],
            'phonenumber'=>['required','min:10','max:13'],
            'image'=>['required'],
            'password' => ['required', 'min:3', 'max:1000'],

        ]);


        $validateddata['datingID'] = 'SKY'.$request->datingCode.'0'.$request->gender;
        $validateddata['image'] = $request->file('image')->store('profile-images');

        $user = User::all();

        foreach($user  as $us){
            if($us->gender == $request->gender && $us->datingCode == $request->datingCode){
                return redirect('/register')->with('failed','Dating Code Have Been Used');
            }

        }

        // dd($validateddata);

        // $user = User::create($validateddata);

        $user = User::create([
            'datingID'=>$validateddata['datingID'],
            'name' => $validateddata['Fullname'],
            'email' => $validateddata['email'],
            'phonenumber'=>$validateddata['phonenumber'],
            'image'=>$validateddata['image'],
            'gender'=>$validateddata['gender'],
            'birthdate'=>$validateddata['birthDate'],
            'datingcode'=>$validateddata['datingCode'],
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME)->with('success','Selamat akun anda berhasil dibuat, anda dapat login menggunakan'.$user->email.' atau '.$user->datingCode);
    }
}
