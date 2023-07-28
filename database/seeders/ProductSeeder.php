<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// require_once '/path/to/Faker/src/autoload.php';
require_once 'vendor/autoload.php';
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // dd(1);
        $location = ['Jakarta','Bogor','Bandung','Depok','Tangerang','Bekasi'];
        // $location = ['Jakarta','Bogor','Bandung','Depok','Tangerang','Bekasi'];
        $merk = ['ZALORA', 'GUCCI', 'Batik Keris', 'Batik Semar','Alleira Batik','Batik Daniswara','Batik Trusmi','Batik Parang Kencana','Iwan Tirta Private Collection'];
        $chart = ['S','M','L','XL'];
        $faker = Faker::create('id_ID');


        for ($i=0; $i < 100; $i++) { 
            # code...
            $test = Products::create([
                'Image' => "batik" . ($faker->numberBetween(1, 14)),
                'Location' => $location[$faker->numberBetween(0, 5)],
                'ProductName' => $faker->text(15),
                'CompanyProduct' => $merk[$faker->numberBetween(0, count($merk)-1)],
                'Color' => $faker->rgbCssColor(),
                'Rating' => $faker->numberBetween(1, 5),
                'Prices' => $faker->numberBetween(1000000, 50000000),
                'Chart' => $chart[$faker->numberBetween(0, 3)],
            ]);

            // dd($test);
        
        }
    }
}
