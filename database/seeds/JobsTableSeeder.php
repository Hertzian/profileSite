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
            'year' => '2019',
            'assignment' => 'My main work, fullstack development, customs CRM´s development, a few sites, responsive, custom ecommerce, wordpress.',
            'show' => true,
            'user_id' => 1,
        ]);

        $job2 = Job::create([
            'company' => 'Biagsa, inmobiliaria',
            'job' => 'FullStack Dev',
            'year' => '2018',
            'assignment' => 'Here, full stack development, mainly helping to develop two customs CRM´s, and maintaince of company app',
            'show' => true,
            'user_id' => 1,
        ]);
        
        $job3 = Job::create([
            'company' => 'Crítica Jalisco, semanario político',
            'job' => 'Frontend, Webmaster',
            'year' => '2016',
            'assignment' => 'Frontend development, the main markup of the site, custom css, responsive, added new functionalities, content management, political news publishing.',
            'show' => true,
            'user_id' => 1,
        ]);
    }
}
