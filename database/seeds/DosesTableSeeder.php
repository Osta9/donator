<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Arrival;
class DosesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {
            $faker = Faker::create('App\Dose');
            DB::table('doses')->insert([
                'arrival_id' => $faker->randomElement(Arrival::pluck('id')->toArray()),
                'processed' => $faker->boolean(),
                'donated' => $faker->boolean(),
            ]);
        }
    }
}
