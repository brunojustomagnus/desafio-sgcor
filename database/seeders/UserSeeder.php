<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Bruno Justo',
                'email' => 'bruno@teste.com',
                'telefone' => '5551991467957',
                'mensagem' => 'Mensagem de exemplo 1.',
                'peso' => 90.5,
                'altura' => 1.75,
                'email_verified_at' => now(),
                'password' => Hash::make('senha123'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Justo Bruno',
                'email' => 'justo@teste.com',
                'telefone' => '5551999999999',
                'mensagem' => 'Mensagem de exemplo 2.',
                'peso' => 75.0,
                'altura' => 1.80,
                'email_verified_at' => now(),
                'password' => Hash::make('senha123'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Magnus Justo',
                'email' => 'magnus@teste.com',
                'telefone' => '5551988888888',
                'mensagem' => 'Mensagem de exemplo 3.',
                'peso' => 80.0,
                'altura' => 1.85,
                'email_verified_at' => now(),
                'password' => Hash::make('senha123'),
                'remember_token' => Str::random(10),
            ],
        ];
        User::insert($users);
    }
}
