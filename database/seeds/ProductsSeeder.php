<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Detol',
                'description' => 'Cleaning',
                'price' => 2500,
                'color' => 'red',
            ],
            [
                'name' => 'Yes',
                'description' => 'Cleaning',
                'price' => 4000,
                'color' => 'white',
            ],
        ]);
    }
}
