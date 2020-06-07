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
            'github' => 'https://www.github.com/hertzian',
            'linkedin' => 'https://www.linkedin.com/in/eduardo-aguilar-1a68a5139/',
            'profesion' => '"Web Developer", "Programer", "Designer", "Entrepreneur"',
            'bio' => 'I am a fullstack web developer, I do CRM´s, web pages, custom systems. I want to become a web and a mobile development specialist. In my spare time I dedicate myself to model aircraft, assembly and flight drones in fpv.',
            'phone' => '00 0000 0000',
            'img' => 'LaloCV_1582163643.jpg',
            'background' => 'project1_1582166366.jpg',
            // 'active' => 1,
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            // 'password' => bcrypt('12345678'),
        ]);
    }
}
