<?php

use App\Apartment;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $new_apartment = new Apartment();
            $new_apartment->name = 'appartamento' . ($i +1);
            $new_apartment->visible = $faker->boolean();
            $new_apartment->image = $faker->imageUrl(640, 480, 'animals', true);
            $new_apartment->guest_number = $faker->numberBetween(2,15);
            $new_apartment->rooms = $faker->numberBetween(2,7);
            $new_apartment->nightly_price = $faker->randomFloat(2,60,900);
            $new_apartment->bed_number = $faker->numberBetween(1,10);
            $new_apartment->bathroom_number = $faker->numberBetween(1,5);
            $new_apartment->square_meters = $faker->numberBetween(50,500);
            

        }
    }
}
