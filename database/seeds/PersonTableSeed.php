<?php

use Illuminate\Database\Seeder;

class PersonTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Person::class, 50)->create();
    }
}
