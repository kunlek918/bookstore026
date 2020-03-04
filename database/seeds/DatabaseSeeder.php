<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'sasiwimon';
        $user->email = 'condingthailand@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();
}
}