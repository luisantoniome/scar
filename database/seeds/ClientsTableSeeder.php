<?php

use Illuminate\Database\Seeder;

use Scar\Client;
use Scar\Order;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Client::truncate();
        Order::truncate();

        factory(Scar\Client::class, 10)->create()->each(function ($client) {
        	$order = factory(Scar\Order::class)->make();
        	$client->orders()->save($order);
        });
    }
}
