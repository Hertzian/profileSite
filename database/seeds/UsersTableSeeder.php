<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Lalo',
            'surname' => 'Aguilar',
            'profesion' => 'Web Developer, Programer, Designer & Entrepreneur',
            'bio' => 'Creative, always on the move, always updating me.',
            'phone' => '33-2385-4666',
            'img' => 'none',
            'background' => 'noneAgain',
            // 'active' => 1,
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            // 'password' => bcrypt('12345678'),
        ]);
    }
}
