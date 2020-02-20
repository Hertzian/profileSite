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
            'img' => 'project1_1582167260.jpg',
            'url' => 'www.warawara.com',
            'description1' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos adipisci quia consectetur tempora ipsum, quae debitis doloremque rem expedita fuga at eius harum laboriosam laborum iusto, facilis voluptate neque beatae.',
            'description2' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos adipisci quia consectetur tempora ipsum, quae debitis doloremque rem expedita fuga at eius harum laboriosam laborum iusto, facilis voluptate neque beatae.',

            'github' => 'www.github.com',
            'show' => false,
            'user_id' => 1
        ]);

        $work2 = Work::create([
            'name' => 'Lalo',
            'img' => 'project2_1582167267.jpg',
            'url' => 'www.warawara.com',
            'description1' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos adipisci quia consectetur tempora ipsum, quae debitis doloremque rem expedita fuga at eius harum laboriosam laborum iusto, facilis voluptate neque beatae.',
            'description2' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos adipisci quia consectetur tempora ipsum, quae debitis doloremque rem expedita fuga at eius harum laboriosam laborum iusto, facilis voluptate neque beatae.',

            'github' => 'www.github.com',
            'show' => false,
            'user_id' => 1,
        ]);

        $work3 = Work::create([
            'name' => 'Lalo',
            'img' => 'project3_1582167274.jpg',
            'url' => 'www.warawara.com',
            'description1' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos adipisci quia consectetur tempora ipsum, quae debitis doloremque rem expedita fuga at eius harum laboriosam laborum iusto, facilis voluptate neque beatae.',
            'description2' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos adipisci quia consectetur tempora ipsum, quae debitis doloremque rem expedita fuga at eius harum laboriosam laborum iusto, facilis voluptate neque beatae.',

            'github' => 'www.github.com',
            'show' => false,
            'user_id' => 1,
        ]);

        $work4 = Work::create([
            'name' => 'Lalo',
            'img' => 'project4_1582167281.jpg',
            'url' => 'www.warawara.com',
            'description1' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos adipisci quia consectetur tempora ipsum, quae debitis doloremque rem expedita fuga at eius harum laboriosam laborum iusto, facilis voluptate neque beatae.',
            'description2' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos adipisci quia consectetur tempora ipsum, quae debitis doloremque rem expedita fuga at eius harum laboriosam laborum iusto, facilis voluptate neque beatae.',

            'github' => 'www.github.com',
            'show' => false,
            'user_id' => 1,
        ]);
    }
    
}
