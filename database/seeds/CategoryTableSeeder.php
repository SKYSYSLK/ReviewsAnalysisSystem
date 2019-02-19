<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name'=>'Rooms & Beds'],
            ['name'=>'Services'],
            ['name'=>'Foods & Beverages'],
            ['name'=>'Facilities'],
        ];
        foreach ($items as $item) {
            \App\Category::create($item);
        }
    }
}
