<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\NameCar;
use App\Models\Receiver;
use App\Models\Destination;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory(1)->create();
       NameCar::factory(6)->create();
       Destination::factory(3)->create();
       Receiver::factory(3)->create();
    }
}
