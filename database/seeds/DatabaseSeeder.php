<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BloodTypesTableSeeder::class);
        $this->call(DonatorsTableSeeder::class);
        $this->call(ArrivalsTableSeeder::class);
        $this->call(DosesTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
