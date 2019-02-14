<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['firstName'=>'Admin','lastName'=>'Admin','email'=>'admin@admin.com','password'=>'$2y$10$DHKFHDI0EMIRoJzCohQbTOFfBKstTRGSo7lI61IQbSu8Vniyh3rCi','role_id'=>'0'],
            ['firstName'=>'Customer','lastName'=>'1','email'=>'customer@customer.com','password'=>'$2y$10$DHKFHDI0EMIRoJzCohQbTOFfBKstTRGSo7lI61IQbSu8Vniyh3rCi','role_id'=>'1']
        ];
        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
