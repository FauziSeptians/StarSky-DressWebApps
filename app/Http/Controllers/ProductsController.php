<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class ProductsController extends Controller
{
    //
    public function showproducts(){
        $products = Products::all()->random(5);
        $location = Products::all()->unique('Location');

        return view('pickdress',compact('products','location'));


    }

    public function productdetails($id){
        $products = Products::where('id',$id)->first();

        $faker = Faker::create('id_ID');
        $color = array();

        $size = ['S','M','L','XL','XXL'];

        for($i = 0; $i < $faker->numberBetween(1,5); $i++){
            $color[$i] = $faker->rgbCssColor();
        }

        for($i = 0; $i < $faker->numberBetween(1,5); $i++){
            $sizes[$i] = $size[$faker->numberBetween(0,4)];
        }

        $products['AditionalColor'] = $color;
        $products['AditionalSize'] = $sizes;


        // dd($products);
        $countColor = count($products->AditionalColor);
        $countSize = count($products->AditionalSize);
        // dd(count($products->AditionalColor));

        return view('checkout',compact('products','countColor','countSize'));
    }

    public function filtering(Request $request){
        $filtering = $request->all();

        // dd($filtering);

        $products = Products::where('Location',$filtering['location'])->where("Prices",">=",$filtering['MinPrice'])->where("Prices",">=",$filtering['MaxPrice'])->take(5)->get();
        $location = Products::all()->unique('Location');

        return view('pickdress',compact('products','location'));
    }

    public function dataecommerce(){
        $products = Products::paginate(14);

        return view('Ecommerce',compact('products'));
    }

    
}
