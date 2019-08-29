<?php

use App\Work;
use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $work1 = Work::create([
            'name' => 'Lalo',
            'img' => '/none',
            'url' => 'www.warawara.com',
            'github' => 'www.github.com',
            'show' => 1,
            'user_id' => 1
        ]);

        $work2 = Work::create([
            'name' => 'Lalo',
            'img' => '/none',
            'url' => 'www.warawara.com',
            'github' => 'www.github.com',
            'show' => 1,
            'user_id' => 1,
        ]);

        $work3 = Work::create([
            'name' => 'Lalo',
            'img' => '/none',
            'url' => 'www.warawara.com',
            'github' => 'www.github.com',
            'show' => 1,
            'user_id' => 1,
        ]);

        $work4 = Work::create([
            'name' => 'Lalo',
            'img' => '/none',
            'url' => 'www.warawara.com',
            'github' => 'www.github.com',
            'show' => 1,
            'user_id' => 1,
        ]);
    }
}
