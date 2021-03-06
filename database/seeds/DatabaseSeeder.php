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
        $this->call(FivestarsTableSeeder::class);
        $this->call(SixstarsTableSeeder::class);
        $this->call(TenstarsTableSeeder::class);
        factory(App\User::class, 1)->create();
    }
}
