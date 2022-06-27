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
        	'email' => 'ammartaradia@gmail.com',
        	'password'  => bcrypt('4Maret2002'),
            'nama' => 'Ammar Taradifa',
            'jenis_kelamin' => 'Laki Laki',
            'alamat' => 'Bandung',
            'no_hp' => '089649799601',
        	'roles' => 'konsumen'
		]);

        \App\Models\User::create([
        	'email' => 'arsyaalifian@gmail.com',
        	'password'  => bcrypt('4Maret2002'),
            'nama' => 'Arsya Alifian Widiatmoko',
            'jenis_kelamin' => 'Laki Laki',
            'alamat' => 'Bandung',
            'no_hp' => '089649799602',
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

        \App\Models\User::create([
        	'email' => 'karenina@gmail.com',
        	'password'  => bcrypt('4Maret2002'),
            'nama' => 'Karenina Casandra Rahmat',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Bandung',
            'no_hp' => '089649799655',
        	'roles' => 'penjahit'
		]);

        \App\Models\User::create([
        	'email' => 'nurcahyaningsih@gmail.com',
        	'password'  => bcrypt('4Maret2002'),
            'nama' => 'Nur Cahya Ningsih',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Bandung',
            'no_hp' => '089649799656',
        	'roles' => 'penjahit'
		]);

        \App\Models\DetailPesanan::create([
            'lingkar_dada' => '90',
            'lingkar_pinggul' => '',
            'lingkar_pinggang' => '80',
            'panjang_baju' => '50',
            'panjang_lengan' => '56',
            'panjang_celana' => '50',
            'keterangan' => 'Seifuku',
            'gambar' => 'bg.png'
        ]);

        \App\Models\Pesanan::create([
            'id_users_1' => '1',
            'id_users_2' => '4',
            'id_detail_pesanans' => '1'
        ]);

        \App\Models\History::create([
            'id_pesanans' => '1',
            'waktu_bayar' => '2022-06-27 13:48:48',
            'total_bayar' => '300000',
            'status' => 'Selesai'
        ]);

        \App\Models\DetailPesanan::create([
            'lingkar_dada' => '120',
            'lingkar_pinggul' => '',
            'lingkar_pinggang' => '110',
            'panjang_baju' => '80',
            'panjang_lengan' => '86',
            'panjang_celana' => '80',
            'keterangan' => 'Seragam',
            'gambar' => 'bg.png'
        ]);

        \App\Models\Pesanan::create([
            'id_users_1' => '2',
            'id_users_2' => '5',
            'id_detail_pesanans' => '2'
        ]);

        \App\Models\History::create([
            'id_pesanans' => '2',
            'waktu_bayar' => '2022-06-27 13:48:48',
            'total_bayar' => '350000',
            'status' => 'Belum Dibayar'
        ]);

        \App\Models\DetailPesanan::create([
            'lingkar_dada' => '90',
            'lingkar_pinggul' => '',
            'lingkar_pinggang' => '80',
            'panjang_baju' => '50',
            'panjang_lengan' => '56',
            'panjang_celana' => '50',
            'keterangan' => 'Jas',
            'gambar' => 'bg.png'
        ]);

        \App\Models\Pesanan::create([
            'id_users_1' => '3',
            'id_users_2' => '6',
            'id_detail_pesanans' => '3'
        ]);

        \App\Models\History::create([
            'id_pesanans' => '3',
            'waktu_bayar' => '2022-06-27 13:48:48',
            'total_bayar' => '500000',
            'status' => 'Selesai'
        ]);
    }
}
