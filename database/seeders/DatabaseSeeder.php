<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Counter;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $counter = Counter::factory(1)->create();
        // Product::factory(5)->create();
        Customer::factory(5)->create();



    }
}
