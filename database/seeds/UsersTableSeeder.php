<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 1; $i <= 10; $i++) {
            $faker = Faker::create('App\User');
            DB::table('users')->insert([
                'email' => $faker->email(),
                'password' => $faker->password(),
            ]);
        }
    }
}
