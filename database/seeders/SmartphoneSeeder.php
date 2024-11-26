<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Smartphone;

class SmartphoneSeeder extends Seeder
{
    public function run(): void
    {
        Smartphone::factory(20)->create();
    }
}
