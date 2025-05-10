<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\jasa;
use Illuminate\Support\Facades\DB;

class JasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jasas = [
            ['nama_jasa' => 'Servis Ringan - Rp 80.000', 'deskripsi_jasa' =>  'Servis ringan motor meliputi Penggantian Oli Mesin, Pengecekan dan Penggantian Kampas Rem, Membersihkan TB, Membersihkan CVT (jika Matic) dan Setel Rantai (jika gigi), Pengecekan Busi Motor, Pengecekan Lampu dan Aki, Pengecekan Ban dan Tekanan angin Ban, Pengecekan Suspensi.'],
            ['nama_jasa' => 'Servis Sedang - Rp 100.000','deskripsi_jasa' =>  'Servis Sedang meliputi Servis Ringan, Servis karburator atau injektor, servis radiator atau Oil Cooler, servis Box Filter, Cek Kondisi pembakaran mesin lewat Knalpot , servis klep, pengecekan tekanan ban, pengecekan kondisi CDI atau Pengecekan Kondisi ECU, Pengecekan Kondisi sensor-sensor motor. '],
            ['nama_jasa' => 'Servis Besar - Rp 400.000', 'deskripsi_jasa' => 'Servis Besar meliputi Servis Sedang, Turun Mesin, Skir Klep, Stel Ulang Klep, Korter (jika Perlu), Ganti piston, bersihin, Intake Manifold, Bersihin TB, ganti rantai keteng (jika perlu), ganti packing, bubut (jika Perlu), ganti tensioner, cek kelistrikan secara menyeluruh, ganti kampas kopling (jika Perlu), dll.']
        ];

        // Jasa::create($jasas);
        // foreach ($jasas as $jasa) {
        //     DB::table('jasas')->insert([
        //         'id' => $jasa[1],
        //         'nama' =>
        //     ]);

        foreach ($jasas as $jasa) {
            Jasa::create($jasa);
        }

        }
    }

