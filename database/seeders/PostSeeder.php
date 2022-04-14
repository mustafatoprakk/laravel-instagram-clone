<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(10)->create();

        foreach (Post::all() as $post) {
            $users = User::inRandomOrder()->take(rand(1, 3))->pluck("id");
            foreach ($users as $user) {
                $post->users()->attach($user, ["is_manager" => rand(0, 1)]);
            }
        }
    }
}
