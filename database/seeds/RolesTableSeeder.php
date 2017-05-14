<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = new App\Role();
        $userRole->name = "User";
        $userRole->save();

        $moderator = new App\Role();
        $moderator->name = "Moderator";
        $moderator->save();

        $admin = new App\Role();
        $admin->name = "Admin";
        $admin->save();
    }
}
