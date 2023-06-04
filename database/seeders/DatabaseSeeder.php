<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      // \App\Models\User::factory(10)->create();

       // \App\Models\tag::factory(10)->create();

       $tags = tag::factory(10)->create();

       User::factory(20)->create()
        ->each(function($user) use($tags){
            Listing::factory(rand(2 , 5))->create(['user_id' => $user->id])
                ->each(function($listing) use($tags){
                $listing->tags()->attach($tags->random(2));
                });
       });
    }
}
