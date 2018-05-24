<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {
            $faker = Faker::create('App\Event');
            DB::table('events')->insert([
                'city' => $faker->city(),
                'address' => $faker->address(),
                'date' => $faker->date(),
                'info' => $faker->asciify(),
            ]);
    }
}
}
