<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Form;

class FormTableSeeder extends Seeder
{
    public function run()
    {
        $form =[
        [
            'user_id'=>'1',
            'course'=> 'CS',
            'phone'=> '0123456789',
            'company'=> 'IT',
            'role'=> 'Developer',
            'state'=> 'Sarawak',
            'region'=> 'Kuching',
            'review'=> 'good',
        ],

        [
            'user_id'=>'1',
            'course'=> 'FK',
            'phone'=> '0123456789',
            'company'=> 'CS',
            'role'=> 'IT',
            'state'=> 'Sabah',
            'region'=> 'Tawau',
            'review'=> 'great',
        ]
        ];

        foreach($form as $key=> $value){
            Form::create($value);
        }
    }
}
