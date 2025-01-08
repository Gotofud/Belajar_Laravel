<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        ['title'=>'Tips Cepat Kaya', 'content'=>'korupsi'],
        ['title'=>'Haruskah kita serang israel?', 'content'=>'Harus'],
        ['title'=>'Membangun dinasti pemerintah', 'content'=>'lorem ipsum 404'],
        ['title'=>'Membangun dinasti pemerintah 2', 'content'=>'lorem ipsum 404'],
        ['title'=>'Membangun dinasti pemerintah 3', 'content'=>'lorem ipsum 404']
        
    ];

    DB::table('posts')->insert($posts);
    }
}
