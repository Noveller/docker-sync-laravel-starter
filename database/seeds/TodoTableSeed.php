<?php

use Illuminate\Database\Seeder;

class TodoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Todo::class, 15)->create();
    }
}
