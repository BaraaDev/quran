<?php

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
        \App\Models\User::create([
            'name'     => 'Baraa',
            'email'    => 'baraa@app.com',
            'password' => bcrypt('12345678'),
            'phone'    => '01065858355',
            'is_admin' => 'admin',
            'status'   => 1,
        ]);
    }
}
