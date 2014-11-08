<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'      => 'Sherry Lohr',
            'username'  => 'sherrylohr',
            'email'     => 'sherryalohr@gmail.com',
            'password'  => Hash::make('Joeybean098'),
        ));
    }
}