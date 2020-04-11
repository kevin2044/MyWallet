<?php

use Illuminate\Database\Seeder;

class TransferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transfers')->insert([[
            'description' => 'Salary',
            'amount' => 4800,
            'wallet_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]]);
        DB::table('transfers')->insert([[
            'description' => 'Rent',
            'amount' => -1200,
            'wallet_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]]);
    }
}
