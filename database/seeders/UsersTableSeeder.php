<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'name'=>'Adam Kowalski',
            'email'=>'adam@admin.pl',
            'password'=>bcrypt('password'),
            'phone'=>123456789,
            'address'=>"ul.Krakowska 12, 00-000 Warszawa",
            'status'=>'Active',
            'pesel'=>'44111254896',
            'type'=>'admin'
        ]);
        DB::table('users')->insert([
            'name'=>'Dorota Kowalska',
            'email'=>'dorota@system.pl',
            'password'=>bcrypt('password'),
            'phone'=>123456789,
            'address'=>"ul.Krakowska 12, 00-000 Warszawa",
            'status'=>'Active',
            'pesel'=>'44111254896',
            'type'=>'patient'
        ]);
        DB::table('users')->insert([
            'name'=>'Ewa Kowalski',
            'email'=>'ewa@system.pl',
            'password'=>bcrypt('password'),
            'phone'=>123456789,
            'address'=>"ul.Krakowska 12, 00-000 Warszawa",
            'status'=>'Active',
            'pesel'=>'44111254896',
            'type'=>'patient'
        ]);
        DB::table('users')->insert([
            'name'=>'Bartek Nowak',
            'email'=>'barteka@system.pl',
            'password'=>bcrypt('password'),
            'phone'=>123456789,
            'address'=>"ul.Krakowska 12, 00-000 Warszawa",
            'status'=>'Active',
            'pesel'=>'44111254896',
            'type'=>'doctor'
        ]);
        DB::table('users')->insert([
            'name'=>'Stefan Nowak',
            'email'=>'stefan@system.pl',
            'password'=>bcrypt('password'),
            'phone'=>123456789,
            'address'=>"ul.Krakowska 12, 00-000 Warszawa",
            'status'=>'Active',
            'pesel'=>'44111254896',
            'type'=>'doctor'
        ]);
        DB::table('specializations')->insert([
            'name'=>'pulmonolog',
        ]);
        DB::table('specializations')->insert([
            'name'=>'internista',
        ]);
        DB::table('specializations')->insert([
            'name'=>'kardiolog',
        ]);
    }
}
