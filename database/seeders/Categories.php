<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Categories')->insert([
            'name' => '雑誌'
        ]);
        DB::table('Categories')->insert([
            'name' => '小説'
        ]);
        DB::table('Categories')->insert([
            'name' => '漫画'
        ]);
        DB::table('Categories')->insert([
            'name' => '専門書'
        ]);
        DB::table('Categories')->insert([
            'name' => '実用書'
        ]);
        DB::table('Categories')->insert([
            'name' => '写真集'
        ]);
    }
}
