<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'title' => 'Sample Title',
            'genre' => 'Sample Genre',
            'post' => 'Sample Post',
            'created_at' => Carbon::now(), 
        ]);
    }
}
