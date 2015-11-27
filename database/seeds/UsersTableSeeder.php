<?php

use Illuminate\Database\Seeder;

use Scar\User;
use Scar\Order;

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
        Order::truncate();

        factory(Scar\User::class, 10)->create()->each(function ($user) {
        	$order = factory(Scar\Order::class)->make();
        	$user->orders()->save($order);
        });
    }
}
