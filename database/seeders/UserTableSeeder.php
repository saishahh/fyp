<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            [
                'id'=>'1',
                'name'=> 'Siti Aishah',
                'email'=> 'saishah1908@gmail.com',
                'email_verified_at'=> null,
                'password'=> '$2y$10$QUxKObU3JmXvIos8HE0dhu8LFVSTaHM/8CVgVU1TcjlFoGeRuQplm',
                'role'=> 0,
                'remember_token'=> null,
            ]
            ];
    
            foreach($user as $key=> $value){
                User::create($value);
            }
    }
}
