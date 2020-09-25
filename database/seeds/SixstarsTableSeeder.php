<?php

use Illuminate\Database\Seeder;

class SixstarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Sixstar::class, 20)->create();
    }
}
