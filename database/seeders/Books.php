<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Books extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'user_id' => 1,
            'title' => 'はじめてのC',
            'category_id' => 4
        ]);
        DB::table('books')->insert([
            'user_id' => 1,
            'title' => '初めてのPython',
            'category_id' => 4
        ]);
        DB::table('books')->insert([
            'user_id' => 1,
            'title' => 'はじめてのJava',
            'category_id' => 4
        ]);
        DB::table('books')->insert([
            'user_id' => 1,
            'title' => '日経Linux',
            'category_id' => 1
        ]);
        DB::table('books')->insert([
            'user_id' => 1,
            'title' => '日経ソフトウェア',
            'category_id' => 1
        ]);
        DB::table('books')->insert([
            'user_id' => 1,
            'title' => 'MTG Illustration',
            'category_id' => 6
        ]);
    }
}
