<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\Comment;
use App\Models\Recruitement;
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
        // \App\Models\User::factory(10)->create();
        Status::create([
            'status' => 'Initial',
            ]);
            Status::create([
            'status' => 'First Contact',
            ]);
            Status::create([
            'status' => 'Interview',
            ]);
            Status::create([
            'status' => 'Tech Assignment',
            ]);
            Status::create([
            'status' => 'Rejected',
            ]);
            Status::create([
            'status' => 'Hired',
            ]);
            Comment::create([
            'candidate_id' => 1,
            'status_id' => 1
            ]);
            Comment::create([
            'candidate_id' => 1,
            'status_id' => 2,
            'comment' => 'Moved to Step 2'
            ]);
            Comment::create([
            'candidate_id' => 1,
            'status_id' => 3,
            'comment' => 'Moved to Step 3'
            ]);
            Comment::create([
            'candidate_id' => 1,
            'status_id' => 4,
            'comment' => 'Moved to Step 4'
            ]);
            Comment::create([
            'candidate_id' => 1,
            'status_id' => 5,
            'comment' => 'Moved to Step 5 - Hired'
            ]);
            Comment::create([
            'candidate_id' => 2,
            'status_id' => 1
            ]);
            Comment::create([
            'candidate_id' => 2,
            'status_id' => 2,
            'comment' => 'Moved to Step 2'
            ]);
            Comment::create([
            'candidate_id' => 2,
            'status_id' => 5,
            'comment' => 'Failed - Rejected'
            ]);
            Recruitement::create([
            'first_name' => 'Nika',
            'last_name' => 'Rukhadze',
            'position' => 'Web Developer',
            'mobilenumber' => '551-199-932',
            'skills' => 'Html,css,laravel',
            'email' => 'nika.rukhadze@ug.edu.ge',
            'experience' => '6 Years',
            'linkedin_url' => 'https://www.linkedin.com/in/nika-rukhadze-43b64b199/',
            'min_salary' => '100',
            'max_salary' => '10000',
            'status_id' => '1'
            ]);
            Recruitement::create([
                'first_name' => 'Nika',
                'last_name' => 'Rukhadze',
                'position' => 'Web Developer',
                'mobilenumber' => '551-199-932',
                'skills' => 'Html,css,laravel',
                'email' => 'nika.rukhadze@ug.edu.ge',
                'experience' => '6 Years',
                'linkedin_url' => 'https://www.linkedin.com/in/nika-rukhadze-43b64b199/',
                'min_salary' => '100',
                'max_salary' => '10000',
                'status_id' => '2'
                ]);
            Recruitement::create([
                'first_name' => 'Nika',
                'last_name' => 'Rukhadze',
                'position' => 'Web Developer',
                'mobilenumber' => '551-199-932',
                'skills' => 'html',
                'email' => 'nika.rukhadze@ug.edu.ge',
                'experience' => '6 Years',
                'linkedin_url' => 'https://www.linkedin.com/in/nika-rukhadze-43b64b199/',
                'min_salary' => '100',
                'max_salary' => '10000',
                'status_id' => '5'
            ]);
            Recruitement::create([
                'first_name' => 'Nika',
                'last_name' => 'Rukhadze',
                'position' => 'Web Developer',
                'mobilenumber' => '',
                'skills' => '',
                'email' => '',
                'experience' => '6 Years',
                'linkedin_url' => 'https://www.linkedin.com/in/nika-rukhadze-43b64b199/',
                'min_salary' => '',
                'max_salary' => '',
                'status_id' => '5'
            ]);
    }
}
