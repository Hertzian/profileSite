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
        $skill1 = Skill::create([
            'name' => 'PHP',
            'value' => '50',
            'show' => false,
            'user_id' => 1
        ]);
        $skill2 = Skill::create([
            'name' => 'Laravel',
            'value' => '50',
            'show' => false,
            'user_id' => 1
        ]);
        $skill3 = Skill::create([
            'name' => 'HTML',
            'value' => '50',
            'show' => false,
            'user_id' => 1
        ]);
        $skill4 = Skill::create([
            'name' => 'JS',
            'value' => '50',
            'show' => false,
            'user_id' => 1
        ]);
        $skill5 = Skill::create([
            'name' => 'Bootstrap',
            'value' => '50',
            'show' => false,
            'user_id' => 1
        ]);
        $skill6 = Skill::create([
            'name' => 'CSS',
            'value' => '50',
            'show' => false,
            'user_id' => 1
        ]);
        $skill7 = Skill::create([
            'name' => 'SASS',
            'value' => '50',
            'show' => false,
            'user_id' => 1
        ]);
    }
}
