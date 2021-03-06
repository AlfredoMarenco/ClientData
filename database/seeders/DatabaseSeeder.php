<?php

namespace Database\Seeders;

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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(DevelopmentSeeder::class);
        $this->call(LeadSeeder::class);
        $this->call(TaskSeeder::class);
        $this->call(CallSeeder::class);
        $this->call(NoteSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(EmployeeSeeder::class);
    }
}
