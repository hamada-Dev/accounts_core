<?php

use Illuminate\Database\Seeder;

class CostCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Domain\CostCenter\CostCenter::class,500)->create();
    }
}
