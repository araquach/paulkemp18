<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BlogParasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_paras')->insert([
            'id' => 1,
            'blog_id' => 1,
            'para' => 'Paragraph one of Blog One',
            'para_pic' => 'http://via.placeholder.com/250x150',
            'para_pic_alt' => 'Paragraph 1 pic',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_paras')->insert([
            'id' => 2,
            'blog_id' => 1,
            'para' => 'Paragraph two of Blog One',
            'para_pic' => '',
            'para_pic_alt' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_paras')->insert([
            'id' => 3,
            'blog_id' => 2,
            'para' => 'Paragraph 2 of blog 2',
            'para_pic' => 'http://via.placeholder.com/250x150',
            'para_pic_alt' => 'Paragraph 2 pic blog 2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_paras')->insert([
            'id' => 4,
            'blog_id' => 3,
            'para' => 'This is another paragraph, its pretty dull',
            'para_pic' => 'http://via.placeholder.com/250x150',
            'para_pic_alt' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_paras')->insert([
            'id' => 5,
            'blog_id' => 4,
            'para' => 'Paragraph one of Blog Four',
            'para_pic' => 'http://via.placeholder.com/250x150',
            'para_pic_alt' => 'Paragraph 1 pic blog 4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_paras')->insert([
            'id' => 6,
            'blog_id' => 3,
            'para' => 'Paragraph two of Blog Three',
            'para_pic' => '',
            'para_pic_alt' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_paras')->insert([
            'id' => 7,
            'blog_id' => 2,
            'para' => 'Paragraph one of Blog Two',
            'para_pic' => 'http://via.placeholder.com/250x150',
            'para_pic_alt' => 'Pic for para 1 blog 2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        
    }
}
