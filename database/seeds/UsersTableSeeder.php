<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Pius',
            'last_name' => 'Shungu',
            'phone_number' => '0714262024',
            'location' => 'Dar-es-Salaam',
            'email' => 'shungupius@gmail.com',
            'password' => bcrypt('Piusshungu')
        ]);

        $this->call([
            UsersTableSeeder::class
        ]);
    }
}
