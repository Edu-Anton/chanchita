<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Eduardo Calderón',
            'email' => 'eduardo@mail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Juan Perez',
            'email' => 'juan@mail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
