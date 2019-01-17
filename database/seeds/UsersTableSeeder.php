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
            'name'      =>  'Stefhany Oliveira',
            'email'     =>  'stefhany.emilly@hotmail.com',
            'password'  =>  bcrypt('123456'),
            'permission'  => 'ADMIN' //essa usuário será o único administrador do sistema (insere, altera e deleta um artigo)
        ]);
    }
}
