<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User;
        $admin->name = "administrator";
        $admin->email = "admin@gmail.com";
        $admin->password = \Hash::make("admin123");
        $admin->roles = "Administrator";
        $admin->image= ('imagesUser/7AmmHlSpoMFy25o0fUB77VHsTawMmmE6A1OA75P1.png');
        $admin->save();
        $this->command->info("Admin berhasil ditambah");
        factory(App\Popular::class, 6)->create();
        factory(App\Recipe::class, 10)->create();
        factory(App\Method::class, 5)->create();
    }

}
