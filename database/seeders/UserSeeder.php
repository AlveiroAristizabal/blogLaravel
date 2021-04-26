<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
       User::create([
          'name'=>'z',
          'email' => 'z@z.com',
          'password' => bcrypt('zzzzzzzz') 
       ])->assignRole('Admin'); //podemos $role o el name del rol Admin
        User::factory(99)->create();
       
    }
}
