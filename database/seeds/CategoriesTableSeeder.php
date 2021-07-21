<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder
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
            $new_category = new Category();
            $new_category->name = $faker->name();
            dump($new_category);
        }



    }
}
