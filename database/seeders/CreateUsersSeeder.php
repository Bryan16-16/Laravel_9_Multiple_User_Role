<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'fname'=>'user',
               'lname'=>'Admin',
               'phone'=>'639754144214',
               'email'=>'admin@gmail.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            [
                'fname'=>'user',
                'lname'=>'Doctor',
                'phone'=>'639754144214',
               'email'=>'doctor@gmail.com',
               'type'=> 2,
               'password'=> bcrypt('123456'),
            ],
            [
                'fname'=>'user',
               'lname'=>'Secretary',
               'phone'=>'639754144214',
                'email'=>'secretary@gmail.com',
                'type'=> 3,
                'password'=> bcrypt('123456'),
             ],
            [
                'fname'=>'user',
                'lname'=>'Patient',
                'phone'=>'639754144214',
               'email'=>'Patient@gmail.com',
               'type'=>0,
               'password'=> bcrypt('123'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}