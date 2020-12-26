<?php

use Illuminate\Database\Seeder;

class PopularTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Popular::class, 6)->create();
    }
}
