<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Listing::create([
            'title'=>'Laravel Senior Devekoper',
            'tags'=>'Laravel, Java',
            'company'=>'Mzumbe Enterprise',
            'Location'=>'Morogoro-Tanzania',
        ]);
    }
}
