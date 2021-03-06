<?php

use Illuminate\Database\Seeder;

use Scar\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        factory(Scar\User::class, 10)->create();
    }
}
