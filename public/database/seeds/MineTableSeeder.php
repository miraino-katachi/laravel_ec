<?php

use Illuminate\Database\Seeder;

class MineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mine')->truncate();
        DB::table('mine')->insert([
            'name' => '坂上　正',
            'age' => 54,
        ]);
    }
}
