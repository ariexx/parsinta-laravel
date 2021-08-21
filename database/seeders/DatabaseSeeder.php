<?php

namespace Database\Seeders;


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
        //memanggil seeder class, tidak perlu import seeder dikarenakan 1 namespace
        $this->call([
            UsersSeeder::class,
            TasksSeeder::class
        ]);
    }
}
