<?php

use App\Pembeli;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $pembeli = new Pembeli();
            $pembeli->judul_buku = 'ATTACK ON TITAN';
            $pembeli->tipe_buku = 'Novel';
            $pembeli->jumlah_buku = 1;
            $pembeli->harga_buku = '45000';
            $pembeli->tanggal_pembelian = '19-05-2020';
            $pembeli->save();
    }
}
