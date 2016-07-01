<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'nome'              =>  'Rafael do Nascimento Lima',
                'password'          =>  Hash::make('123'),
                'email'             =>  'rafaelnlima@live.com',
                'data_nascimento'   =>  '1989/01/27',
                'foto'              =>  'user01'
            ],
            [
                'nome'              =>  'Ana Karla Mesquita de Araujo',
                'password'          =>  Hash::make('123'),
                'email'             =>  'akma.85@live.com',
                'data_nascimento'   =>  '1989/01/28',
                'foto'              =>  'user02'
            ],
            [
                'nome'              =>  'Claudia Helena do Nascimento Lima',
                'password'          =>  Hash::make('123'),
                'email'             =>  'claudianlima@live.com',
                'data_nascimento'   =>  '1989/01/26',
                'foto'              =>  'user03'
            ],
            [
                'nome'              =>  'Francisco Sávio Franco de Lima',
                'password'          =>  Hash::make('123'),
                'email'             =>  'tecvelsavio@live.com',
                'data_nascimento'   =>  '1971/01/23',
                'foto'              =>  'user04'
            ],
            [
                'nome'              =>  'Samuel Mesquita de Lima',
                'password'          =>  Hash::make('123'),
                'email'             =>  'samuel@gmail.com',
                'data_nascimento'   =>  '2016/01/23',
                'foto'              =>  'user05'
            ],
            [
                'nome'              =>  'Victor Hugo do Nascimento Lima',
                'password'          =>  Hash::make('123'),
                'email'             =>  'victor@live.com',
                'data_nascimento'   =>  '1998/01/23',
                'foto'              =>  'user06'
            ],
        ]);
    }
}
