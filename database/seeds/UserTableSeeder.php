<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  App\User::create([
            'name' => 'jhon Doe',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            // 'admin' => 1

        ]);
    }
}
