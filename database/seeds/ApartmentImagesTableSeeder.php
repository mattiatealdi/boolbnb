<?php

use App\Apartment_image;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ApartmentImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //

        for ($i=0; $i < 10; $i++) {
            # code...
            $new_apartment_image = new Apartment_image();
            $new_apartment_image = $faker->imageUrl();
        }

    }
}
