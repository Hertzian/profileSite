<?php

use App\Skill;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listening = Skill::create([
            'name' => 'English Listening',
            'value' => '90',
            'show' => true,
            'user_id' => 1
        ]);
        $reading = Skill::create([
            'name' => 'English Reading',
            'value' => '90',
            'show' => true,
            'user_id' => 1
        ]);
        $speaking = Skill::create([
            'name' => 'English Speaking',
            'value' => '80',
            'show' => true,
            'user_id' => 1
        ]);
        $skill1 = Skill::create([
            'name' => 'PHP',
            'value' => '95',
            'show' => true,
            'user_id' => 1
        ]);
        $skill2 = Skill::create([
            'name' => 'Laravel',
            'value' => '95',
            'show' => true,
            'user_id' => 1
        ]);
        $skill3 = Skill::create([
            'name' => 'JS',
            'value' => '90',
            'show' => true,
            'user_id' => 1
        ]);
        $skill4 = Skill::create([
            'name' => 'HTML',
            'value' => '98',
            'show' => true,
            'user_id' => 1
        ]);
        $skill5 = Skill::create([
            'name' => 'Bootstrap',
            'value' => '95',
            'show' => true,
            'user_id' => 1
        ]);
        $skill6 = Skill::create([
            'name' => 'CSS',
            'value' => '95',
            'show' => true,
            'user_id' => 1
        ]);
        $skill7 = Skill::create([
            'name' => 'SASS',
            'value' => '93',
            'show' => true,
            'user_id' => 1
        ]);
    }
}
