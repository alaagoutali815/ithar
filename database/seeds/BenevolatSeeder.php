<?php

use Illuminate\Database\Seeder;
use App\Benevolet;
class BenevolatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Benevolet::class, 5)->create();

    }
}
