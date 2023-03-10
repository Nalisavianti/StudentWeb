<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'username'=>'admin',
            'password'=>Hash::make('12345'),
            'name'=>'nalisavianti',
            'nrp'=>'12345',
            'jabatan'=>'bripda',
            'gender'=>'wanita',
            'tipe'=>'POLRI',
            'level'=>'admin',
        
        ];

        $user = new User($user);

        $user->save();
    }

}




