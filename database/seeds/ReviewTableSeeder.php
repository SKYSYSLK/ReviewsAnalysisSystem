<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['user_id'=>'1','category_id'=>'1','review' => 'wow, this is awesome', 'score' => '0.2', 'level' => '2'],
            ['user_id'=>'2','category_id'=>'1','review' => 'WTF', 'score' => '-0.1', 'level' => '4'],
            ['user_id'=>'3','category_id'=>'2','review' => 'I dont like this shit', 'score' => '-0.5', 'level' => '4'],
            ['user_id'=>'4','category_id'=>'3','review' => 'I dont like this shit', 'score' => '0.1', 'level' => '3'],
            ['user_id'=>'4','category_id'=>'4','review' => 'I dont like this shit', 'score' => '0.8', 'level' => '1'],
            ['user_id'=>'5','category_id'=>'5','review' => 'Great Service', 'score' => '0.9', 'level' => '4'],
        ];
        foreach ($items as $item) {
            \App\Review::create($item);
        }
    }
}
