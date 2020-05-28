<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
                'name' => 'Andres',
                'email' => 'andres@gmail.com',
                'password' => bcrypt('qwerty'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'name' => 'Gerardo',
                'email' => 'gerardo@gmail.com',
                'password' => bcrypt('qwerty'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]

            ];
            DB::table('users')->insert($users);
    }

}
