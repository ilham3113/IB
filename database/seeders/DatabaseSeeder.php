<?php

namespace Database\Seeders;
use App\Models\Articel;
use App\Models\Category;
use App\Models\Publish;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Articel::factory(40)->create();

        User::create([
            'name' => 'ilham suyadi',
            'username' => 'ilham',
            'wa' => '081575063570',
            'password' => 'ilham',
            'password' => Hash::make('ilham'),
            'email' => 'ilham@gmail.com',
        ]);

        Publish::create([
            'name' => 'draft',
            'slug' => 'draft'
        ]);
 
        Publish::create([
            'name' => 'publish',
            'slug' => 'publish'
        ]);
        
        Category::create([
            'name' => 'network',
            'slug' => 'network'
        ]);

        Category::create([
            'name' => 'web-desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'php',
            'slug' => 'php'
        ]);

        Category::create([
            'name' => 'python',
            'slug' => 'python'
        ]);

        Category::create([
            'name' => 'laravel',
            'slug' => 'laravel'
        ]);

        Category::create([
            'name' => 'css',
            'slug' => 'css'
        ]);

        Category::create([
            'name' => 'sccs',
            'slug' => 'sccs'
        ]);

        Category::create([
            'name' => 'linux',
            'slug' => 'linux'
        ]);

        Category::create([
            'name' => 'windows',
            'slug' => 'windows'
        ]);

        Category::create([
            'name' => 'server',
            'slug' => 'server'
        ]);

        Category::create([
            'name' => 'cisco',
            'slug' => 'cisco'
        ]);

        Category::create([
            'name' => 'mikrotik',
            'slug' => 'mikrotik'
        ]);
    }
}
