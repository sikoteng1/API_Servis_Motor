<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\jasa;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['1', 'Service Matic', 'matic1.jpg', 'Melayani Servis CVT, Penggantian Oli, Cek Kondisi dan Pergantian Sparepart.'],
            ['2', 'Service Bebek', 'bebek1.jpg', 'Melayani Servis Karburator, Penggantian Oli, Cek Kondisi dan Pergantian Sparepart.'],
            ['3', 'Service Kopling', 'kopling1.jpg', 'Melayani Servis Karburator, Penggantian Oli, Cek Kondisi dan Pergantian Sparepart.']
        ];

        jasa::create($products);
    }
}
