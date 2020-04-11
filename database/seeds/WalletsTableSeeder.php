<?php

use Illuminate\Database\Seeder;

class WalletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wallets')->insert([
            'money' => 2600.00,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
