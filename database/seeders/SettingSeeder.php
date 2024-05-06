<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'type' => 'navbar',
                'label' => 'navbar1',
                'url' => '#'
            ],
            [
                'type' => 'navbar',
                'label' => 'navbar2',
                'url' => '#'
            ],
            [
                'type' => 'navbar',
                'label' => 'navbar3',
                'url' => '#'
            ],
            [
                'type' => 'navbar',
                'label' => 'navbar4',
                'url' => '#'
            ],
            [
                'type' => 'navbar',
                'label' => 'navbar5',
                'url' => '#'
            ],
            [
                'type' => 'footerA',
                'label' => 'footerA1',
                'url' => '#'
            ],
            [
                'type' => 'footerA',
                'label' => 'footerA2',
                'url' => '#'
            ],
            [
                'type' => 'footerA',
                'label' => 'footerA3',
                'url' => '#'
            ],
            [
                'type' => 'footerB',
                'label' => 'footerB1',
                'url' => '#'
            ],
            [
                'type' => 'footerB',
                'label' => 'footerB2',
                'url' => '#'
            ],
            [
                'type' => 'footerB',
                'label' => 'footerB3',
                'url' => '#'
            ],
            [
                'type' => 'facebook',
                'label' => 'socialmedia1',
                'url' => '#'
            ],
            [
                'type' => 'instagram',
                'label' => 'socialmedia2',
                'url' => '#'
            ],
            [
                'type' => 'youtube',
                'label' => 'socialmedia3',
                'url' => '#'
            ],
            [
                'type' => 'tiktok',
                'label' => 'socialmedia4',
                'url' => '#'
            ],
        ]);
    }
}
