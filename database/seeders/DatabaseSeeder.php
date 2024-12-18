<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\worker;
use App\Models\Department;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        $workers = [
            [
              "department_id" => 1,
              "name" => "Miss Madelen Årdal",
              "city" => "Eggkleiva",
              "email"=> "madelen.ardal@example.com",
              "picture"=> "https://randomuser.me/api/portraits/women/88.jpg",
            ],
            [
              "department_id" => 1,
              "name" => "Miss Nila Rugland",
              "city" => "Sommarøy",
              "email" => "nila.rugland@example.com",
              "picture" => "https://randomuser.me/api/portraits/women/68.jpg",
            ],
            [
              "department_id" => 3,
              "name" => "Mr Diego Aanestad",
              'city' => "Fuglevik",
              "email" => "diego.aanestad@example.com",
              "picture" => "https://randomuser.me/api/portraits/men/83.jpg",
            ],
            [
              "department_id" => 4,
              "name" => "Mr Nikolai Lidal",
              "city" => "Liland",
              "email" => "nikolai.lidal@example.com",
              "picture" => "https://randomuser.me/api/portraits/men/82.jpg",
            ],
            [
              "department_id" => 8,
              "name" => "Ms Goda Skinnes",
              "city" => "Bjørkelangen",
              "email" => "goda.skinnes@example.com",
              "picture" => "https://randomuser.me/api/portraits/women/62.jpg",
            ],
            [
              "department_id" => 6,
              "name" => "Ms Mari Abdirahman",
              "city" => "Øyenkilen",
              "email" => "mari.abdirahman@example.com",
              "picture" => "https://randomuser.me/api/portraits/women/85.jpg",
            ],
            [
              "department_id" => 1,
              "name" => "Mr Stanislaw Sørheim",
              "city" => "Porsgrunn",
              "email" => "stanislaw.sorheim@example.com",
              "picture" => "https://randomuser.me/api/portraits/men/87.jpg",
            ],
            [
              "department_id" => 5,
              "name" => "Ms Thelma Hope",
              "city" => "Skre",
              "email" => "thelma.hope@example.com",
              "picture" => "https://randomuser.me/api/portraits/women/19.jpg",
            ]];
            $departments = [
              ['name' => 'Engineering'],
              ['name' => 'Marketing'],
              ['name' => 'Sales'],
              ['name' => 'Human Resources'],
              ['name' => 'Finance'],
              ['name' => 'Legal'],
              ['name' => 'Customer Support'],
              ['name' => 'Research and Development'],
              ['name' => 'Quality Assurance'],
              ['name' => 'Information Technology'],
          ];
          foreach($departments as $department)
          {
              Department::create($department);    
          }
            foreach($workers as $worker)
            {
                worker::create($worker);    
            }
    }
}
