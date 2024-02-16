<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i<3; $i++){
            $posts = new Post();
            $posts->titulo = $faker-> sentence;
            $posts->contenido = $faker-> text;
            $posts->usuario_id = $faker-> numberBetween(1, 4);
            $posts->save();
        }
        
         
    }
}
