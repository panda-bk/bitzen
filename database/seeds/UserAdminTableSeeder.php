<?php

use Illuminate\Database\Seeder;
use \App\User;


class UserAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'bitzen',
            'email'     => 'admin@bitzen.com.br',
            'password'  => bcrypt('bitzen'),
        ]);
    }
}
