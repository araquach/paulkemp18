<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert([
            'id' => '1',
            'salon_id' => '2',
            'client_id' => '3',
            'first_name' => 'Adam',
            'last_name' => 'Carter',
            'mobile' => '07921806884',
            'opt_out' => '0',
            'created_at' => Carbon::now(),
        ]);
    }
}
