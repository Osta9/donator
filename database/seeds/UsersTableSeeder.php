<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'bayer.santa@nicolas.com',
                'password' => '85h`F<_j0*.Tu&P2s',
                'account_type' => 'user',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'jamaal72@gmail.com',
                'password' => '*(:bmh5.8og.$I:J',
                    'account_type' => 'user',
                    'remember_token' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                2 => 
                array (
                    'id' => 3,
                    'email' => 'svon@hirthe.com',
                'password' => '>hx)FGWXOgcni@g,AZ2)',
                'account_type' => 'user',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'email' => 'noemi.kertzmann@brown.info',
                'password' => 'Z[g*7!{Zhp',
                'account_type' => 'user',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'email' => 'lharris@hotmail.com',
                'password' => 'sS&;k{:ZV',
                'account_type' => 'user',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'email' => 'nicolas.ivory@cormier.com',
                'password' => '\'jz"t-',
                'account_type' => 'user',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'email' => 'bailey.miracle@morissette.com',
                'password' => '\'Xw2ypG9\\r"]K',
                'account_type' => 'user',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'email' => 'ogleichner@king.com',
                'password' => 'xV^p&.L}J;',
                'account_type' => 'user',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'email' => 'rath.daphnee@beier.biz',
                'password' => '2{qMB?+b',
                'account_type' => 'user',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'email' => 'nathen20@gmail.com',
                'password' => 'jB5T>4',
                'account_type' => 'user',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'email' => 'admin@admin.com',
                'password' => '$2y$10$nagYIICukzyO2tc14MyTxOkvZg0YpHTVArfOWlDfrgWnvdULn3Nhu',
                'account_type' => 'admin',
                'remember_token' => NULL,
                'created_at' => '2018-05-25 02:53:15',
                'updated_at' => '2018-05-25 02:53:15',
            ),
        ));
        
        
    }
}