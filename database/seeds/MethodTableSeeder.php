<?php

use Illuminate\Database\Seeder;

class MethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Method::class, 5)->create();
    }
}
