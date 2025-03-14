<?php

namespace Database\Seeders;

//use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'name' => "John Doe",
                'profession' => "Web Developer",
                'course' => "Web Programming",
                'email' => "johnii@doe.com",
                'phone' => "0123456781",
                'views' => 100
            ],
            [
                'name' => "Jane Smith",
                'profession' => "Data Analyst",
                'course' => "Data Science",
                'email' => "jane@smith.com",
                'phone' => "0987654321",
                'views' => 200
            ],
            [
                'name' => "Alice Johnson",
                'profession' => "Software Engineer",
                'course' => "Computer Science",
                'email' => "alice@johnson.com",
                'phone' => "1231231234",
                'views' => 150
            ]
        ]);

    }
}
