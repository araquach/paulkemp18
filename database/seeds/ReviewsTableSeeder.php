<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'id' => '1',
            'review' => 'Good service as always. Thanks Adam.',
            'client' => 'Client: Anna Alexander',
            'staff' => 'Staff: Michelle Railton',
            'salon' => '2'
        ]);
        
        DB::table('reviews')->insert([
            'id' => '2',
            'review' => 'Good service as always. Thanks Jimmy.',
            'client' => 'Client: Cruella Peterson',
            'staff' => 'Staff: Izzy Lamb',
            'salon' => '2'
        ]);
    }
}
