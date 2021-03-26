<?php

use Illuminate\Database\Seeder;
use App\Person;
use Faker\Generator as Faker;

class AutoPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for($i = 0; $i < 10; $i++) {
            $person = new Person();
            $person->name = $faker->name();
            $person->birthdate = $faker->dateTime();
            $person->image = $faker->imageUrl(360, 360, 'people', true, 'person', true);
            $person->mail = $faker->email();
            $person->save();
        }
    }
}
