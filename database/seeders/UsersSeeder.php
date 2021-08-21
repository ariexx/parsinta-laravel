<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ini adalah collection
        collect([
            [
                'name' => 'Arief',
                'email' => 'arief@mangorief.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now()
            ],
            [
                'name' => 'Danu',
                'email' => 'Danu@mangorief.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now()
            ],
        ])->each(function ($user) {
            DB::table('users')->insert($user);
        });
    }
}
