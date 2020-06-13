<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            [
                'name'=> 'Bùi Ngọc Hiếu',
                'acc_num' => '0904515270',
                'password' => '123456',
                'balance' => '500000000'
            ],
        ]);
    }
}
