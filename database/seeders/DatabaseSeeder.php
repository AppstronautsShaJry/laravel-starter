<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        User::factory(10)->create()->each(function ($user) {
            // Create 5 posts per user
            $posts = $user->posts()->createMany(
                Post::factory(5)->make()->toArray()
            );

            $posts->each(function ($post) {
                // Add comments to each post
                $post->comments()->createMany(
                    Comment::factory(3)->make()->toArray()
                );

                // Create unique tags and attach to post
                $tags = Tag::factory(3)->create();
                $post->tags()->attach($tags->pluck('id'));
            });
        });
    }
}
