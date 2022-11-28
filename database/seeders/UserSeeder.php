<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Tâm Nguyễn';
        $user->phone = '0901170243' ;
        $user->email = 'belltam240297@gmail.com' ;
        $user->password = bcrypt('123456');
        $user->save();
    }
}
