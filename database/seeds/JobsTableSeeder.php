<?php

use App\Job;
use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job1 = Job::create([
            'company' => 'Dynamic Solutions',
            'job' => 'FullStack Dev',
            'assignment' => 'My main work, fullstack development, responsive, ecommerce, wordpress.',
            'show' => false,
            'user_id' => 1,
        ]);

        $job2 = Job::create([
            'company' => 'Biagsa, inmobiliaria',
            'job' => 'FullStack Dev',
            'assignment' => 'Here, full stack development.',
            'show' => false,
            'user_id' => 1,
        ]);
        
        $job3 = Job::create([
            'company' => 'Crítica Jalisco, semanario político',
            'job' => 'Frontend, Webmaster',
            'assignment' => 'Frontend development, content management, political news publishing.',
            'show' => false,
            'user_id' => 1,
        ]);
    }
}
