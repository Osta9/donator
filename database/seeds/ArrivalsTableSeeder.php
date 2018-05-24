<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Donator;

class ArrivalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {
            $faker = Faker::create('App\Arrival');
            DB::table('arrivals')->insert([
                'date' => $faker->date(),
                'donator_id'=> $faker->randomElement(Donator::pluck('id')->toArray()),
                'doctor_id' => $faker->numberBetween(1, 10),
                'assistant_id' => $faker->numberBetween(1, 10),
                'hemoglobin' => $faker->numberBetween(20, 50),
                'blood_sys' => $faker->numberBetween(20, 50),
                'blood_dia' => $faker->numberBetween(20, 50),
                'accepted' => $faker->boolean(),
            ]);
        }
    }
}
