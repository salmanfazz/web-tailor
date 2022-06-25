<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
        	'email' => 'salman.fazzz@gmail.com',
        	'password'  => bcrypt('4Maret2002'),
            'nama' => 'Salman Fazz',
            'jenis_kelamin' => 'Laki Laki',
            'alamat' => 'Bandung',
            'no_hp' => '089649799600',
        	'roles' => 'konsumen'
		]);

		\App\Models\User::create([
        	'email' => 'audisyzhn2002@gmail.com',
        	'password'  => bcrypt('4Maret2002'),
            'nama' => 'Audi Syahzehan',
            'jenis_kelamin' => 'Laki Laki',
            'alamat' => 'Bandung',
            'no_hp' => '089649799654',
        	'roles' => 'penjahit'
		]);
    }
}
