<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
              'name' => 'Zulfikar Alisunan',
              'username' => 'mzulfikaras',
              'email' => 'admin1@email.com',
              'password' => Hash::make('Zulfikar123')
            ],
            [
                'name' => 'Lorentz Levanone',
                'username' => 'lorentzL',
                'email' => 'admin21@email.com',
                'password' => Hash::make('Lorentz123')
            ],
            [
                'name' => 'Rizky Ramadhan',
                'username' => 'rizkyR',
                'email' => 'admin3@email.com',
                'password' => Hash::make('Rizky123')
            ],
            [
                'name' => 'Ibnu Saputra',
                'username' => 'ibnuS',
                'email' => 'admin4@email.com',
                'password' => Hash::make('Ibnu123')
            ],
            [
                'name' => 'Jabal Thoriq',
                'username' => 'jabalT',
                'email' => 'admin5@email.com',
                'password' => Hash::make('Jabal123')
            ],
        ]);
    }
}
