<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {
            $faker = Faker::create('App\Employee');
            DB::table('employees')->insert([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'title' => $faker -> randomElement(['osoblje', 'doktor']),
            ]);
        }
    }
}
