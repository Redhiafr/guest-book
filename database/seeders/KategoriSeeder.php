<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'nama_kategori' => 'Instansi',
            ],
            [
                'nama_kategori' => 'Universitas',
            ],
            [
                'nama_kategori' => 'Lainnya',
            ],
        ]);
    }
}
