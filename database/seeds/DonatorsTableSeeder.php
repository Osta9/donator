<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\BloodType;

class DonatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userIds = User::all()->pluck('id')->toArray();
        for($i = 1; $i <= 10; $i++) {
            $faker = Faker::create('App\Donator');
            DB::table('donators')->insert([
                'user_id' => $faker->randomElement($userIds),
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'birth_date' => $faker->date(),
                'address' => $faker->address(),
                'phone' => $faker->phoneNumber(),
                'blood_type_id' => $faker->randomElement(BloodType::pluck('id')->toArray()),
            ]);
        }
    }
}
