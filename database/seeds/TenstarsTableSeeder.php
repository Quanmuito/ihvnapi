<?php

use Illuminate\Database\Seeder;

class TenstarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Tenstar::class, 20)->create();
    }
}
