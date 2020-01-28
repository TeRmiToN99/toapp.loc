<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'          =>'Админ',
                'email'         =>'exempl1@mail.com',
                'password'      => bcrypt(Str::random(16)),
            ],
            [
                'name'          =>'Юзер',
                'email'         =>'exempl2@mail.com',
                'password'      => bcrypt('19181716'),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
