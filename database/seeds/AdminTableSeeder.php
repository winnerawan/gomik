<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'id' => 1,
            'name' => 'Administrator',
            'email' => 'gokep.app@gmail.com',
            'password' => bcrypt('./Iseng2pertamax')
        ]);
    }
}
