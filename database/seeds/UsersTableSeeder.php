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
        factory(App\User::class,29)->create();

        App\User::create([
            'name'      =>  'admin',
            'email'     =>  'admin@admin.com',
<<<<<<< HEAD
            'password'  =>  bcrypt('123456'),
            'permission'  => 'ADMIN'
        ]);

         App\User::create([
            'name'      =>  'Stefhany Oliveira',
            'email'     =>  'stefhany.emilly@hotmail.com',
            'password'  =>  bcrypt('123456'),
            'permission'  => 'ADMIN'
=======
            'password'  =>  bcrypt('1234'),
            'function'  => 'admin'
>>>>>>> 6ac49ed79dd82eac0f418b7d5481a6f023d9a08f
        ]);
    }
}
