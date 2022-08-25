<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;

class UserandComments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 2)->create();
    }
}
