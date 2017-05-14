<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->name = "Admin";
        $user->role_id = 3;
        $user->email = "test@test.com";
        $user->password = bcrypt('zxasqw12');
        $user->save();

        $user = new App\User();
        $user->name = "User";
        $user->role_id = 1;
        $user->email = "test2@test.com";
        $user->password = bcrypt('zxasqw12');
        $user->save();
    }
}
