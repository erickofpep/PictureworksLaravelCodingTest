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
        factory(User::class, 10)->make();
    }
}
