<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ApprenticesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apprentices')->insert([
            'first_name' => 'Peter',
            'second_name' => 'Smith',
            'age' => '42',
            'address1' => '13 Nasty Road',
            'address2' => 'Stockton Heath',
            'town' => 'Warrington',
            'postcode' => 'WA4 4NT',
            'email' => 'petersmith@peter.com',
            'phone' => '2456789',
            'mobile' => '07888888888',
            'current_emp' => 'In a Salon',
            'in_salon' => 'Yes',
            'salon_name' => 'Callaghans',
            'qualification_school' => '4 or more GCSE\'s',
            'qualification_hair' => 'NVQ2',
            'cutting' => '5',
            'styling' => '5',
            'colouring' => '5',
            'men' => '5',
            'extensions' => '5',
            'chem_straightening' => '5',
            'brazil_blow' => '5',
            'hair_up' => '5',
            'about' => 'I\'m an all round great guy',
            'why_hairdressing' => 'I just fell into it',
            'why_us' => 'I\'ve heard it\'s a fantastic salon',
            'salon_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('apprentices')->insert([
            'first_name' => 'Debbie',
            'second_name' => 'McGee',
            'age' => '60',
            'address1' => '800 Crazee Lane',
            'address2' => '',
            'town' => 'London',
            'postcode' => 'L1 1LL',
            'email' => 'debbie@mcgee.co.uk',
            'phone' => '',
            'mobile' => '07773334444',
            'current_emp' => 'Not in hairdressing role',
            'in_salon' => 'No',
            'salon_name' => '',
            'qualification_school' => 'None',
            'qualification_hair' => 'NVQ5',
            'cutting' => '1',
            'styling' => '2',
            'colouring' => '3',
            'men' => '1',
            'extensions' => '2',
            'chem_straightening' => '5',
            'brazil_blow' => '5',
            'hair_up' => '2',
            'about' => 'I was married to the late Paul Daniels and was his assistant for many years. I\'m looking for a change of carrer since his death',
            'why_hairdressing' => 'It\'s similar to magic',
            'why_us' => 'I decided to move up north and Jakata looks like the best salon in the North West',
            'salon_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('apprentices')->insert([
            'first_name' => 'Helen',
            'second_name' => 'Green',
            'age' => '16',
            'address1' => '12 Horton Close',
            'address2' => 'Great Sankey',
            'town' => 'Warrington',
            'postcode' => 'WA5 1JJ',
            'email' => 'helen@green.com',
            'phone' => '654456',
            'mobile' => '0765445632',
            'current_emp' => 'In hairdressing Role',
            'in_salon' => 'Yes - local',
            'salon_name' => 'Johnsons',
            'qualification_school' => '1 or more A level',
            'qualification_hair' => 'NVQ3',
            'cutting' => '4',
            'styling' => '4',
            'colouring' => '4',
            'men' => '4',
            'extensions' => '4',
            'chem_straightening' => '4',
            'brazil_blow' => '4',
            'hair_up' => '4',
            'about' => 'I\'m a chatty girl that likes to spend 3 hours a day doiung my own hair',
            'why_hairdressing' => 'Hairdressing seems like a good laugh',
            'why_us' => 'I\'ve applied at every single salon in the country and Jakata is my last hope',
            'salon_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('apprentices')->insert([
            'first_name' => 'Graham',
            'second_name' => 'Peters',
            'age' => '84',
            'address1' => '90 Tinder Lane',
            'address2' => 'Grappenhall',
            'town' => 'Warrington',
            'postcode' => 'WA4 4TR',
            'email' => 'graham@peters.com',
            'phone' => '',
            'mobile' => '07978564321',
            'current_emp' => 'Not employed',
            'in_salon' => 'No',
            'salon_name' => '',
            'qualification_school' => 'Less than you can imagine',
            'qualification_hair' => 'None',
            'cutting' => '1',
            'styling' => '0',
            'colouring' => '1',
            'men' => '0',
            'extensions' => '0',
            'chem_straightening' => '1',
            'brazil_blow' => '0',
            'hair_up' => '0',
            'about' => 'I\'m pretty much useless at everything. I\'ve spent 80 years of my life doing absolutely nothing',
            'why_hairdressing' => 'I don\'t want to be a hairdresser',
            'why_us' => 'Stop putting me under so much pressure!',
            'salon_id' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
