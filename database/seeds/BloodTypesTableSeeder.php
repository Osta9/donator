<?php

use Illuminate\Database\Seeder;

class BloodTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blood_types')->delete();
        
        \DB::table('blood_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => '0+',
                'img' => '0p',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'type' => '0-',
                'img' => '0n',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'type' => 'A+',
                'img' => 'ap',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'type' => 'A-',
                'img' => 'an',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'type' => 'B+',
                'img' => 'bp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'type' => 'B-',
                'img' => 'bn',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'type' => 'AB+',
                'img' => 'abp',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'type' => 'AB-',
                'img' => 'abn',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}