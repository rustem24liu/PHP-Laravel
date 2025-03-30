<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $moderator = Role::create([
            'name' => 'Author',
            'slug' => 'author',
            'permissions' => json_encode([
                'create-article' => false,
                'read-any-article' => true,
                'update-any-article' => true,
                'delete-any-article' => true,
            ])
        ]);

        $user = Role::create([
            'name' => 'User',
            'slug' => 'user',
            'permissions' => json_encode([
                'create-article' => true,
                'read-own-article' => true,
                'update-own-article' => true,
                'delete-own-article' => true,
            ])
        ]);



    }
}
