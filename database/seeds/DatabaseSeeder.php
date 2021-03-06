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
         $this->call(UsersTableSeeder::class);
         $this->call(StylistsTableSeeder::class);
         $this->call(ApprenticesTableSeeder::class);
         $this->call(OffersTableSeeder::class);
         $this->call(BlogsTableSeeder::class);
         $this->call(BlogParasTableSeeder::class);
         $this->call(TeamMembersTableSeeder::class);
         $this->call(ReviewsTableSeeder::class);
    }
}
