<?php

use Illuminate\Database\Seeder;

class FivestarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Fivestar::class, 30)->create();
    }
}
