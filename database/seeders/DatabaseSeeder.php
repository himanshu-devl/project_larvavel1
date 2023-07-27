<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Listing::create([
            'title' =>'laravel devloper',
            'tags' =>'laravel php 5tloper',
            'company' =>'laravel yudevloper',
            'loaction' =>'laravel  7i7i devloper',
            'email' =>'laravel  i7idevloper',
            'website' =>'laravei7u  7i7y l devloper',
            'description' =>'laravelgtht   u6uu u6ui i7y5i7uyi i7iikik i7i7yi7y i7yii devloper'
        ]

        );
    }
}
