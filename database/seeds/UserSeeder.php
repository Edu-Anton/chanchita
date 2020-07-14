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
            'name' => 'Eduardo',
            'lastname' => 'Calderón',
            'rol' => 'admin',
            'email' => 'eduardo1acc@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Juan',
            'lastname' => 'Pérez',
            'email' => 'juan@mail.com',
            'rol' => 'user',
            'password' => Hash::make('12345678')
        ]);
    }
}
