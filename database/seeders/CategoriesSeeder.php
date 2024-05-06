<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog_categories')->insert([
            [
                'name' => 'post',
                'slug' => 'navbar1',
                'description' => '<p>post</p>',
                'is_visible' => '1'
            ],
            [
                'name' => 'liputan',
                'slug' => 'navbar2',
                'description' => '<p>liputan</p>',
                'is_visible' => '1'
            ],
            [
                'name' => 'pengumuman',
                'slug' => 'navbar3',
                'description' => '<p>pengumuman</p>',
                'is_visible' => '1'
            ],
            
        ]);
    }
}
